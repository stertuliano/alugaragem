<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TownhousesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TownhousesTable Test Case
 */
class TownhousesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TownhousesTable
     */
    public $Townhouses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.townhouses',
        'app.addresses',
        'app.cities',
        'app.garages',
        'app.users',
        'app.garages_towhouses',
        'app.periods',
        'app.payments_types',
        'app.garages_payments_types',
        'app.vehicles_types',
        'app.garages_vehicles_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Townhouses') ? [] : ['className' => 'App\Model\Table\TownhousesTable'];
        $this->Townhouses = TableRegistry::get('Townhouses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Townhouses);

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
