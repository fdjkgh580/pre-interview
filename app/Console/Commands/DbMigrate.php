<?php

namespace App\Console\Commands;

use App\Migration\TransferDatabase;
use Exception;
use Illuminate\Console\Command;

class DbMigrate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:migrate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '新/舊資料庫移植程式' . PHP_EOL . '詳情請見：issue #dbMigrate';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if (false === $this->confirm('「新/舊資料庫移植程式」需要約 10 分鐘才能完成，確定要執行嗎？')) {
            return;
        }

        // 開始移植新/舊資料庫
        try {
            $transfer = new TransferDatabase();
            $transfer->transfer();
        } catch (Exception $e) {
            $this->error($e->getMessage());
        }
    }
}
