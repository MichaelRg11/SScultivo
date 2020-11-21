<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MonitoreoAcTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MonitoreoAcTable Test Case
 */
class MonitoreoAcTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MonitoreoAcTable
     */
    protected $MonitoreoAc;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.MonitoreoAc',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('MonitoreoAc') ? [] : ['className' => MonitoreoAcTable::class];
        $this->MonitoreoAc = $this->getTableLocator()->get('MonitoreoAc', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->MonitoreoAc);

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
