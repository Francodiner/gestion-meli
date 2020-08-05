<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZondaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZondaTable Test Case
 */
class ZondaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZondaTable
     */
    public $Zonda;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Zonda'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Zonda') ? [] : ['className' => ZondaTable::class];
        $this->Zonda = TableRegistry::getTableLocator()->get('Zonda', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Zonda);

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
