<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GaragensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GaragensTable Test Case
 */
class GaragensTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GaragensTable
     */
    public $Garagens;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.garagens',
        'app.condominios',
        'app.garagens_condominios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Garagens') ? [] : ['className' => 'App\Model\Table\GaragensTable'];
        $this->Garagens = TableRegistry::get('Garagens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Garagens);

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
