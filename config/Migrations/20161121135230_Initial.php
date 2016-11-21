<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('addresses')
            ->addColumn('city_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('address', 'string', [
                'comment' => '	',
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('number', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('complement', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('neighborhood', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('zipcode', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addIndex(
                [
                    'city_id',
                ]
            )
            ->create();

        $this->table('cities')
            ->addColumn('state_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addIndex(
                [
                    'state_id',
                ]
            )
            ->create();

        $this->table('garages')
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('address_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('tittle', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('description', 'string', [
                'default' => null,
                'limit' => 500,
                'null' => false,
            ])
            ->addColumn('add_date', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('status', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'user_id',
                ]
            )
            ->create();

        $this->table('garages_payments_types')
            ->addColumn('garage_id', 'integer', [
                'comment' => '	',
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('payments_type_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'garage_id',
                ]
            )
            ->addIndex(
                [
                    'payments_type_id',
                ]
            )
            ->create();

        $this->table('garages_towhouses', ['id' => false, 'primary_key' => ['']])
            ->addColumn('garage_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('towhouse_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addIndex(
                [
                    'garage_id',
                ]
            )
            ->addIndex(
                [
                    'towhouse_id',
                ]
            )
            ->create();

        $this->table('garages_vehicles_types')
            ->addColumn('garage_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('vehicles_type_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'garage_id',
                ]
            )
            ->addIndex(
                [
                    'vehicles_type_id',
                ]
            )
            ->create();

        $this->table('payments_types')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => false,
            ])
            ->create();

        $this->table('periods')
            ->addColumn('garage_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('start_time', 'time', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('end_time', 'time', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('available', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'garage_id',
                ]
            )
            ->create();

        $this->table('state')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->create();

        $this->table('states')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->create();

        $this->table('townhouses')
            ->addColumn('address_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addIndex(
                [
                    'address_id',
                ]
            )
            ->create();

        $this->table('users')
            ->addColumn('address_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('role', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('username', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('password', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('add_date', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('last_login_date', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'address_id',
                ]
            )
            ->create();

        $this->table('vehicles_types')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->create();

        $this->table('addresses')
            ->addForeignKey(
                'city_id',
                'cities',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();

        $this->table('cities')
            ->addForeignKey(
                'state_id',
                'states',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();

        $this->table('garages')
            ->addForeignKey(
                'id',
                'addresses',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->addForeignKey(
                'user_id',
                'users',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();

        $this->table('garages_payments_types')
            ->addForeignKey(
                'garage_id',
                'garages',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->addForeignKey(
                'payments_type_id',
                'payments_types',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();

        $this->table('garages_towhouses')
            ->addForeignKey(
                'garage_id',
                'garages',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->addForeignKey(
                'towhouse_id',
                'townhouses',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();

        $this->table('garages_vehicles_types')
            ->addForeignKey(
                'garage_id',
                'garages',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->addForeignKey(
                'vehicles_type_id',
                'vehicles_types',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();

        $this->table('periods')
            ->addForeignKey(
                'garage_id',
                'garages',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();

        $this->table('townhouses')
            ->addForeignKey(
                'address_id',
                'addresses',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();

        $this->table('users')
            ->addForeignKey(
                'address_id',
                'addresses',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();
    }

    public function down()
    {
        $this->table('addresses')
            ->dropForeignKey(
                'city_id'
            );

        $this->table('cities')
            ->dropForeignKey(
                'state_id'
            );

        $this->table('garages')
            ->dropForeignKey(
                'id'
            )
            ->dropForeignKey(
                'user_id'
            );

        $this->table('garages_payments_types')
            ->dropForeignKey(
                'garage_id'
            )
            ->dropForeignKey(
                'payments_type_id'
            );

        $this->table('garages_towhouses')
            ->dropForeignKey(
                'garage_id'
            )
            ->dropForeignKey(
                'towhouse_id'
            );

        $this->table('garages_vehicles_types')
            ->dropForeignKey(
                'garage_id'
            )
            ->dropForeignKey(
                'vehicles_type_id'
            );

        $this->table('periods')
            ->dropForeignKey(
                'garage_id'
            );

        $this->table('townhouses')
            ->dropForeignKey(
                'address_id'
            );

        $this->table('users')
            ->dropForeignKey(
                'address_id'
            );

        $this->dropTable('addresses');
        $this->dropTable('cities');
        $this->dropTable('garages');
        $this->dropTable('garages_payments_types');
        $this->dropTable('garages_towhouses');
        $this->dropTable('garages_vehicles_types');
        $this->dropTable('payments_types');
        $this->dropTable('periods');
        $this->dropTable('state');
        $this->dropTable('states');
        $this->dropTable('townhouses');
        $this->dropTable('users');
        $this->dropTable('vehicles_types');
    }
}
