<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Garages Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Addresses
 * @property \Cake\ORM\Association\BelongsTo $VehiclesTypes
 * @property \Cake\ORM\Association\BelongsTo $Plans
 * @property \Cake\ORM\Association\BelongsTo $PaymentsTypes
 * @property \Cake\ORM\Association\HasMany $GaragesTowhouses
 * @property \Cake\ORM\Association\HasMany $Periods
 *
 * @method \App\Model\Entity\Garage get($primaryKey, $options = [])
 * @method \App\Model\Entity\Garage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Garage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Garage|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Garage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Garage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Garage findOrCreate($search, callable $callback = null)
 */
class GaragesTable extends Table
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

        $this->table('garages');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Addresses', [
            'foreignKey' => 'address_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('VehiclesTypes', [
            'foreignKey' => 'vehicle_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Plans', [
            'foreignKey' => 'plan_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('PaymentsTypes', [
            'foreignKey' => 'payment_type_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('GaragesTowhouses', [
            'foreignKey' => 'garage_id'
        ]);
        $this->hasMany('Periods', [
            'foreignKey' => 'garage_id'
        ]);
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
            ->requirePresence('tittle', 'create')
            ->notEmpty('tittle');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->dateTime('add_date')
            ->allowEmpty('add_date');

        $validator
            ->boolean('status')
            ->allowEmpty('status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['address_id'], 'Addresses'));
        $rules->add($rules->existsIn(['vehicle_type_id'], 'VehiclesTypes'));
        $rules->add($rules->existsIn(['plan_id'], 'Plans'));
        $rules->add($rules->existsIn(['payment_type_id'], 'PaymentsTypes'));

        return $rules;
    }
}
