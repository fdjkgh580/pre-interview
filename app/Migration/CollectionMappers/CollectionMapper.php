<?php

namespace App\Migration\CollectionMappers;

use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Connection;
use MongoDB\Model\IndexInfo;

/**
 * 新/舊集合對照器
 *
 * 供移植主流程使用，一個子類別即為新的集合，可配置：
 *  - 每個集合（Collection）移植後的名稱（如 user => users）
 *    - @see CollectionMapper::newCollectionName()
 *  - 每個集合（Collection）要移植的欄位
 *    - @see CollectionMapper::requiredColumns()
 *
 * Class CollectionMapper
 * @package App\Migration\CollectionMappers
 */
abstract class CollectionMapper
{
    /** @var Connection */
    protected $db;
    /** @var string */
    protected $originCollectionName;

    /**
     * 取得舊 Collection 名稱
     *
     * @return string
     */
    public function originCollectionName(): string
    {
        return $this->originCollectionName;
    }

    /**
     * 取得移植後 Collection 名稱
     *
     * @return string
     */
    abstract public function newCollectionName(): string;

    /**
     * 配置想移植的欄位
     *
     * 若無配置(空陣列)，則預設移植最後一筆 Document 的所有欄位
     *
     * @return mixed
     * @see CollectionMapper::columnsToMigrated()
     */
    abstract public function requiredColumns(): array;

    /**
     * @param Connection $db
     */
    public function setDB(Connection $db): void
    {
        $this->db = $db;
    }

    /**
     * 配置舊集合名稱
     *
     * @param $originCollectionName
     */
    public function setOriginCollectionName($originCollectionName): void
    {
        $this->originCollectionName = $originCollectionName;
    }

    /**
     * 移植索引
     *
     * 將舊 Collection 的索引移植至新的 Database.Collection
     */
    public function migrateIndexes()
    {
        Schema::table(
            $this->newCollectionName(),
            function ($collectionSchema) {
                // 移植索引
                foreach ($this->indexes() as $index) {
                    $collectionSchema->index(
                        $index->getKey(),
                        null,
                        null,
                        [
                            'unique' => $index->isUnique(),
                        ]
                    );
                }
            }
        );
    }

    /**
     * 取得舊 Collection 的索引
     *
     * 供移植索引（migrateIndexes）使用
     *
     * @return IndexInfo[]
     */
    protected function indexes(): array
    {
        $indexes = collect($this->db->getCollection($this->originCollectionName())->listIndexes());

        return $indexes->filter(
            function ($index) {
                return '_id_' !== $index->getName();
            }
        )->toArray();
    }

    /**
     * 返回要移植的欄位
     *
     * @return array
     * @see CollectionMapper::requiredColumns()
     */
    public function columnsToMigrated(): array
    {
        // 子類別可自行配置要移植的欄位
        if ($requiredColumns = $this->requiredColumns()) {
            return $requiredColumns;
        }

        // 若無配置要移植的欄位，則預設為最後一筆資料的所有欄位
        $lastRow = $this->db->table($this->originCollectionName())->orderBy('_id', 'desc')->first();

        return array_keys($lastRow);
    }
}
