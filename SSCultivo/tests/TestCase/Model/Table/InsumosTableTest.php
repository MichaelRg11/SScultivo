<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InsumosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InsumosTable Test Case
 */
class InsumosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InsumosTable
     */
    protected $Insumos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Insumos',
        'app.Cultivos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Insumos') ? [] : ['className' => InsumosTable::class];
        $this->Insumos = $this->getTableLocator()->get('Insumos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Insumos);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
