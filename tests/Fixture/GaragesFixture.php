<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GaragesFixture
 *
 */
class GaragesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'address_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'vehicle_type_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'plan_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'payment_type_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tittle' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'description' => ['type' => 'string', 'length' => 500, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'add_date' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'status' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_garagem_usuario_idx' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'fk_garagens_tipos_veiculos_idx' => ['type' => 'index', 'columns' => ['vehicle_type_id'], 'length' => []],
            'fk_garagens_planos_idx' => ['type' => 'index', 'columns' => ['plan_id'], 'length' => []],
            'fk_garagens_tipos_pagamentos_idx' => ['type' => 'index', 'columns' => ['payment_type_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_garages_users' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_garages_addresses' => ['type' => 'foreign', 'columns' => ['id'], 'references' => ['addresses', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_garages_vehicles_types' => ['type' => 'foreign', 'columns' => ['vehicle_type_id'], 'references' => ['vehicles_types', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_garages_plans' => ['type' => 'foreign', 'columns' => ['plan_id'], 'references' => ['plans', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_garages_payment_types' => ['type' => 'foreign', 'columns' => ['payment_type_id'], 'references' => ['payments_types', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'user_id' => 1,
            'address_id' => 1,
            'vehicle_type_id' => 1,
            'plan_id' => 1,
            'payment_type_id' => 1,
            'tittle' => 'Lorem ipsum dolor sit amet',
            'description' => 'Lorem ipsum dolor sit amet',
            'add_date' => '2016-09-30 14:50:59',
            'status' => 1
        ],
    ];
}
