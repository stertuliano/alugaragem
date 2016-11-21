<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeriodsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeriodsTable Test Case
 */
class PeriodsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PeriodsTable
     */
    public $Periods;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.periods',
        'app.garages',
        'app.users',
        'app.addresses',
        'app.cities',
        'app.townhouses',
        'app.vehicles_types',
        'app.plans',
        'app.payments_types',
        'app.garages_towhouses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Periods') ? [] : ['className' => 'App\Model\Table\PeriodsTable'];
        $this->Periods = TableRegistry::get('Periods', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Periods);

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
