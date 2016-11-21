<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GaragensFixture
 *
 */
class GaragensFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'usuario_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'endereco_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo_veiculo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'plano_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo_pagamento_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'titulo' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'descricao' => ['type' => 'string', 'length' => 500, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'data_cadastro' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'status' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_garagem_usuario_idx' => ['type' => 'index', 'columns' => ['usuario_id'], 'length' => []],
            'fk_garagens_tipos_veiculos_idx' => ['type' => 'index', 'columns' => ['tipo_veiculo_id'], 'length' => []],
            'fk_garagens_planos_idx' => ['type' => 'index', 'columns' => ['plano_id'], 'length' => []],
            'fk_garagens_tipos_pagamentos_idx' => ['type' => 'index', 'columns' => ['tipo_pagamento_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_garagens_usuarios' => ['type' => 'foreign', 'columns' => ['usuario_id'], 'references' => ['usuarios', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_garagens_enderecos' => ['type' => 'foreign', 'columns' => ['id'], 'references' => ['enderecos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_garagens_tipos_veiculos' => ['type' => 'foreign', 'columns' => ['tipo_veiculo_id'], 'references' => ['tipos_veiculos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_garagens_planos' => ['type' => 'foreign', 'columns' => ['plano_id'], 'references' => ['planos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_garagens_tipos_pagamentos' => ['type' => 'foreign', 'columns' => ['tipo_pagamento_id'], 'references' => ['tipos_pagamentos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'usuario_id' => 1,
            'endereco_id' => 1,
            'tipo_veiculo_id' => 1,
            'plano_id' => 1,
            'tipo_pagamento_id' => 1,
            'titulo' => 'Lorem ipsum dolor sit amet',
            'descricao' => 'Lorem ipsum dolor sit amet',
            'data_cadastro' => '2016-09-30 00:10:40',
            'status' => 1
        ],
    ];
}
