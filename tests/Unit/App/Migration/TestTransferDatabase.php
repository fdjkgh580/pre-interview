<?php


namespace Tests\Unit\App\Migration;

use App\Migration\TransferDatabase;
use Tests\TestCase;

class TestTransferDatabase extends TestCase
{
    /**
     * @var TransferDatabase
     */
    private $transfer;

    protected function setUp(): void
    {
        parent::setUp();
        $this->transfer = new TransferDatabase();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @throws \Exception
     */
    public function testMigrationThatHasRows()
    {
        $this->transfer->transfer();
        $this->assertTrue(true);
    }
}
