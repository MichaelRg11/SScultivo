<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CultivosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CultivosTable Test Case
 */
class CultivosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CultivosTable
     */
    protected $Cultivos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Cultivos',
        'app.Usuarios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Cultivos') ? [] : ['className' => CultivosTable::class];
        $this->Cultivos = $this->getTableLocator()->get('Cultivos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Cultivos);

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
