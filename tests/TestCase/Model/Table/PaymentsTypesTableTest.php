<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaymentsTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaymentsTypesTable Test Case
 */
class PaymentsTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PaymentsTypesTable
     */
    public $PaymentsTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.payments_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PaymentsTypes') ? [] : ['className' => 'App\Model\Table\PaymentsTypesTable'];
        $this->PaymentsTypes = TableRegistry::get('PaymentsTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PaymentsTypes);

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
