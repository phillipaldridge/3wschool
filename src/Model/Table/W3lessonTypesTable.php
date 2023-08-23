<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * W3lessonTypes Model
 *
 * @property \App\Model\Table\W3lessonsTable&\Cake\ORM\Association\HasMany $W3lessons
 *
 * @method \App\Model\Entity\W3lessonType newEmptyEntity()
 * @method \App\Model\Entity\W3lessonType newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\W3lessonType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\W3lessonType get($primaryKey, $options = [])
 * @method \App\Model\Entity\W3lessonType findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\W3lessonType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\W3lessonType[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\W3lessonType|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3lessonType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3lessonType[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3lessonType[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3lessonType[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3lessonType[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class W3lessonTypesTable extends Table
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

        $this->setTable('w3lesson_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('W3lessons', [
            'foreignKey' => 'w3lesson_type_id',
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
