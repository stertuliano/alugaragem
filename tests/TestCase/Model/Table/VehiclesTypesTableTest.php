<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VehiclesTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VehiclesTypesTable Test Case
 */
class VehiclesTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VehiclesTypesTable
     */
    public $VehiclesTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vehicles_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('VehiclesTypes') ? [] : ['className' => 'App\Model\Table\VehiclesTypesTable'];
        $this->VehiclesTypes = TableRegistry::get('VehiclesTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VehiclesTypes);

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
