<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * W3classTypes Model
 *
 * @property \App\Model\Table\W3classesTable&\Cake\ORM\Association\HasMany $W3classes
 *
 * @method \App\Model\Entity\W3classType newEmptyEntity()
 * @method \App\Model\Entity\W3classType newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\W3classType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\W3classType get($primaryKey, $options = [])
 * @method \App\Model\Entity\W3classType findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\W3classType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\W3classType[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\W3classType|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3classType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3classType[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3classType[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3classType[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3classType[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class W3classTypesTable extends Table
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

        $this->setTable('w3class_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('W3classes', [
            'foreignKey' => 'w3class_type_id',
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
            ->scalar('name')
            ->maxLength('name', 20)
            ->allowEmptyString('name');

        $validator
            ->scalar('slug')
            ->allowEmptyString('slug');

        return $validator;
    }
}
