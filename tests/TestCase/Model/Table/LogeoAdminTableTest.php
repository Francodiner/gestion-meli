<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LogeoAdminTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LogeoAdminTable Test Case
 */
class LogeoAdminTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LogeoAdminTable
     */
    public $LogeoAdmin;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.LogeoAdmin'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LogeoAdmin') ? [] : ['className' => LogeoAdminTable::class];
        $this->LogeoAdmin = TableRegistry::getTableLocator()->get('LogeoAdmin', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LogeoAdmin);

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
