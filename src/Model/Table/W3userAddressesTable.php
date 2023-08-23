<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * W3userAddresses Model
 *
 * @property \App\Model\Table\W3usersTable&\Cake\ORM\Association\BelongsTo $W3users
 * @property \App\Model\Table\W3countriesTable&\Cake\ORM\Association\BelongsTo $W3countries
 *
 * @method \App\Model\Entity\W3userAddress newEmptyEntity()
 * @method \App\Model\Entity\W3userAddress newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\W3userAddress[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\W3userAddress get($primaryKey, $options = [])
 * @method \App\Model\Entity\W3userAddress findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\W3userAddress patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\W3userAddress[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\W3userAddress|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3userAddress saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3userAddress[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3userAddress[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3userAddress[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3userAddress[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class W3userAddressesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('w3user_addresses');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('W3users', [
            'foreignKey' => 'w3user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('W3countries', [
            'foreignKey' => 'w3country_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('w3user_id')
            ->notEmptyString('w3user_id');

        $validator
            ->boolean('prefered')
            ->notEmptyString('prefered');

        $validator
            ->scalar('num')
            ->maxLength('num', 10)
            ->requirePresence('num', 'create')
            ->notEmptyString('num');

        $validator
            ->scalar('street1')
            ->maxLength('street1', 30)
            ->requirePresence('street1', 'create')
            ->notEmptyString('street1');

        $validator
            ->scalar('street2')
            ->maxLength('street2', 30)
            ->allowEmptyString('street2');

        $validator
            ->scalar('city')
            ->maxLength('city', 20)
            ->requirePresence('city', 'create')
            ->notEmptyString('city');

        $validator
            ->integer('w3country_id')
            ->notEmptyString('w3country_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('w3user_id', 'W3users'), ['errorField' => 'w3user_id']);
        $rules->add($rules->existsIn('w3country_id', 'W3countries'), ['errorField' => 'w3country_id']);

        return $rules;
    }
}
