<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * W3countries Model
 *
 * @property \App\Model\Table\W3userAddressesTable&\Cake\ORM\Association\HasMany $W3userAddresses
 *
 * @method \App\Model\Entity\W3country newEmptyEntity()
 * @method \App\Model\Entity\W3country newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\W3country[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\W3country get($primaryKey, $options = [])
 * @method \App\Model\Entity\W3country findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\W3country patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\W3country[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\W3country|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3country saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3country[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3country[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3country[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3country[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class W3countriesTable extends Table
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

        $this->setTable('w3countries');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('W3userAddresses', [
            'foreignKey' => 'w3country_id',
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
            ->scalar('name_en')
            ->maxLength('name_en', 255)
            ->requirePresence('name_en', 'create')
            ->notEmptyString('name_en');

        $validator
            ->scalar('name')
            ->maxLength('name', 200)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('code')
            ->maxLength('code', 10)
            ->requirePresence('code', 'create')
            ->notEmptyString('code');

        $validator
            ->boolean('is_active')
            ->notEmptyString('is_active');

        return $validator;
    }
}
