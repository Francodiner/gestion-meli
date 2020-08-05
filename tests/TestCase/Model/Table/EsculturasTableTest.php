<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EsculturasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EsculturasTable Test Case
 */
class EsculturasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EsculturasTable
     */
    public $Esculturas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Esculturas',
        'app.TipoEsculturas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Esculturas') ? [] : ['className' => EsculturasTable::class];
        $this->Esculturas = TableRegistry::getTableLocator()->get('Esculturas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Esculturas);

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
