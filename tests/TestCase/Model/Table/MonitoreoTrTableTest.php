<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MonitoreoTrTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MonitoreoTrTable Test Case
 */
class MonitoreoTrTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MonitoreoTrTable
     */
    protected $MonitoreoTr;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.MonitoreoTr',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('MonitoreoTr') ? [] : ['className' => MonitoreoTrTable::class];
        $this->MonitoreoTr = $this->getTableLocator()->get('MonitoreoTr', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->MonitoreoTr);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
