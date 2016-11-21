<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiposPagamentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiposPagamentosTable Test Case
 */
class TiposPagamentosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TiposPagamentosTable
     */
    public $TiposPagamentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipos_pagamentos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TiposPagamentos') ? [] : ['className' => 'App\Model\Table\TiposPagamentosTable'];
        $this->TiposPagamentos = TableRegistry::get('TiposPagamentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TiposPagamentos);

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
