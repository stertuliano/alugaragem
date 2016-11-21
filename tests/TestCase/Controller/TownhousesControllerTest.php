<?php
namespace App\Test\TestCase\Controller;

use App\Controller\TownhousesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\TownhousesController Test Case
 */
class TownhousesControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
