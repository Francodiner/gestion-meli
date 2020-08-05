<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CapotsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CapotsTable Test Case
 */
class CapotsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CapotsTable
     */
    public $Capots;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Capots'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Capots') ? [] : ['className' => CapotsTable::class];
        $this->Capots = TableRegistry::getTableLocator()->get('Capots', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Capots);

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
