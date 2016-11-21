<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PaymentsTypes Model
 *
 * @method \App\Model\Entity\PaymentsType get($primaryKey, $options = [])
 * @method \App\Model\Entity\PaymentsType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PaymentsType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PaymentsType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PaymentsType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PaymentsType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PaymentsType findOrCreate($search, callable $callback = null)
 */
class PaymentsTypesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('payments_types');
        $this->displayField('name');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }
}
