<?php

namespace App\Migration;

use App\Migration\CollectionMappers\CollectionMapper;
use App\Migration\CollectionMappers\DefaultCollectionMapper;
use App\Migration\CollectionMappers\UserCollectionMapper;
use Exception;
use Illuminate\Support\Facades\DB;
use Jenssegers\Mongodb\Connection;

class TransferDatabase
{
    /** @var Connection */
    private $newDB;
    /** @var Connection */
    protected $originDB;

    public function __construct()
    {
        $this->newDB = DB::connection();
        $this->originDB = DB::connection('old_interview');
        $this->originDB->disableQueryLog();
        $this->newDB->disableQueryLog();
    }

    /**
     * 移植資料
     *
     * @throws Exception
     */
    public function transfer()
    {
        // 若新資料庫有任一筆數，則終止移植資料
        $this->checkIfCollectionEmpty();

        // 開始移植資料
        foreach ($this->originCollections() as $collectionName) {
            // 取得 新/舊集合對照器
            $collection = $this->makeCollectionMapper($this->originDB, $collectionName);

            // 移植 集合索引
            $collection->migrateIndexes();

            // 移植 集合資料
            $this->migrateCollection($collection);

            // 移植後 檢查新/舊集合的筆數數是否相同，若不同則終止移植資料
            $this->checkIfRowsEquals($collection);
        }
    }

    /**
     * 取得所有舊集合名稱
     *
     * @return array
     */
    private function originCollections(): array
    {
        $tables = collect($this->originDB->listCollections())->map(
            function ($table) {
                return $table->getName();
            }
        );

        return $tables->toArray();
    }

    /**
     * 若新資料庫有任一筆數，則終止移植資料
     *
     * @throws Exception
     */
    private function checkIfCollectionEmpty()
    {
        $collectionThatNotEmpty = array_filter(
            $this->originCollections(),
            function ($originCollection) {
                $collection = $this->makeCollectionMapper($this->originDB, $originCollection);
                return $this->newDB->collection($collection->newCollectionName())->count() > 0;
            }
        );

        if ($collectionThatNotEmpty) {
            throw new Exception(implode(PHP_EOL . ', ', $collectionThatNotEmpty) . ' 集合有筆數，請先清空該集合');
        }
    }

    /**
     * 建立新/舊集合對照器
     *
     * 供對照新舊集合名稱、以及移植欄位用
     *
     * @param Connection $db
     * @param $originCollectionName
     * @return CollectionMapper
     */
    private function makeCollectionMapper(Connection $db, $originCollectionName): CollectionMapper
    {
        /** @var CollectionMapper[] $mappers */
        $mappers = [
            'user' => new UserCollectionMapper()
        ];

        $mapper = $mappers[$originCollectionName] ?? new DefaultCollectionMapper();
        $mapper->setDB($db);
        $mapper->setOriginCollectionName($originCollectionName);

        return $mapper;
    }

    /**
     * 開始移植集合
     *
     * @param CollectionMapper $collection
     */
    private function migrateCollection(CollectionMapper $collection)
    {
        // chunk 撈取 originDB.collection
        $this->originDB->table($collection->originCollectionName())->select(
            $collection->columnsToMigrated()
        )->orderBy('_id')->chunk(
            100000,
            // 並批次新增資料至新資料庫
            function ($documents) use ($collection) {
                $bulkInsertData = $documents->toArray();
                $this->newDB->table($collection->newCollectionName())->insert($bulkInsertData);

                // 釋放記憶體
                $documents = null;
                $bulkInsertData = null;
            }
        );
    }

    /**
     * 檢查移植後，新/舊集合的比數是否相同
     *
     * 若不相同則拋出例外
     *
     * @param CollectionMapper $collection
     * @throws Exception
     */
    private function checkIfRowsEquals(CollectionMapper $collection)
    {
        $originCollectionRows = $this->originDB->table(
            $collection->originCollectionName()
        )->count();
        $newCollectionRows = $this->originDB->table(
            $collection->newCollectionName()
        )->count();

        if ($originCollectionRows !== $newCollectionRows) {
            throw new Exception('系統出錯: ' . $collection->originCollectionName() . ' 轉換後筆數不正確');
        }
    }
}

