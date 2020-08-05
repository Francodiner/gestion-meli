<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ColeccionTiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ColeccionTiposTable Test Case
 */
class ColeccionTiposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ColeccionTiposTable
     */
    public $ColeccionTipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('ColeccionTipos') ? [] : ['className' => ColeccionTiposTable::class];
        $this->ColeccionTipos = TableRegistry::getTableLocator()->get('ColeccionTipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ColeccionTipos);

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
}
