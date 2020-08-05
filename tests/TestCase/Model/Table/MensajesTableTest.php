<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MensajesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MensajesTable Test Case
 */
class MensajesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MensajesTable
     */
    public $Mensajes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Mensajes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Mensajes') ? [] : ['className' => MensajesTable::class];
        $this->Mensajes = TableRegistry::getTableLocator()->get('Mensajes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mensajes);

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
