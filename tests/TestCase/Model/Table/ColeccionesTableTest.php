<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ColeccionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ColeccionesTable Test Case
 */
class ColeccionesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ColeccionesTable
     */
    public $Colecciones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Colecciones',
        'app.ColeccionTipos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Colecciones') ? [] : ['className' => ColeccionesTable::class];
        $this->Colecciones = TableRegistry::getTableLocator()->get('Colecciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Colecciones);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
