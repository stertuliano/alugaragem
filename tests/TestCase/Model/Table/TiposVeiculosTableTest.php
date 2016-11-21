<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiposVeiculosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiposVeiculosTable Test Case
 */
class TiposVeiculosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TiposVeiculosTable
     */
    public $TiposVeiculos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipos_veiculos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TiposVeiculos') ? [] : ['className' => 'App\Model\Table\TiposVeiculosTable'];
        $this->TiposVeiculos = TableRegistry::get('TiposVeiculos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TiposVeiculos);

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
