<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * W3programTypes Model
 *
 * @property \App\Model\Table\W3programsTable&\Cake\ORM\Association\HasMany $W3programs
 *
 * @method \App\Model\Entity\W3programType newEmptyEntity()
 * @method \App\Model\Entity\W3programType newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\W3programType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\W3programType get($primaryKey, $options = [])
 * @method \App\Model\Entity\W3programType findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\W3programType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\W3programType[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\W3programType|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3programType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3programType[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3programType[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3programType[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3programType[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class W3programTypesTable extends Table
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

        $this->setTable('w3program_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('W3programs', [
            'foreignKey' => 'w3program_type_id',
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
