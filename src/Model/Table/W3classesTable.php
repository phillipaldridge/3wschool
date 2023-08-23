<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * W3classes Model
 *
 * @property \App\Model\Table\W3classTypesTable&\Cake\ORM\Association\BelongsTo $W3classTypes
 * @property \App\Model\Table\W3lessonsTable&\Cake\ORM\Association\HasMany $W3lessons
 * @property \App\Model\Table\W3userTrackingsTable&\Cake\ORM\Association\HasMany $W3userTrackings
 * @property \App\Model\Table\W3coursesTable&\Cake\ORM\Association\BelongsToMany $W3courses
 * @property \App\Model\Table\W3lessonsTable&\Cake\ORM\Association\BelongsToMany $W3lessons
 *
 * @method \App\Model\Entity\W3class newEmptyEntity()
 * @method \App\Model\Entity\W3class newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\W3class[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\W3class get($primaryKey, $options = [])
 * @method \App\Model\Entity\W3class findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\W3class patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\W3class[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\W3class|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3class saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3class[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3class[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3class[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3class[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class W3classesTable extends Table
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

        $this->setTable('w3classes');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('W3classTypes', [
            'foreignKey' => 'w3class_type_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('W3lessons', [
            'foreignKey' => 'w3class_id',
        ]);
        $this->hasMany('W3userTrackings', [
            'foreignKey' => 'w3class_id',
        ]);
        $this->belongsToMany('W3courses', [
            'foreignKey' => 'w3class_id',
            'targetForeignKey' => 'w3course_id',
            'joinTable' => 'w3classes_w3courses',
        ]);
        $this->belongsToMany('W3lessons', [
            'foreignKey' => 'w3class_id',
            'targetForeignKey' => 'w3lesson_id',
            'joinTable' => 'w3classes_w3lessons',
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
            ->scalar('reference')
            ->maxLength('reference', 20)
            ->allowEmptyString('reference');

        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->allowEmptyString('name');

        $validator
            ->integer('w3class_type_id')
            ->notEmptyString('w3class_type_id');

        $validator
            ->boolean('active')
            ->notEmptyString('active');

        $validator
            ->integer('position')
            ->notEmptyString('position');

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
        $rules->add($rules->existsIn('w3class_type_id', 'W3classTypes'), ['errorField' => 'w3class_type_id']);

        return $rules;
    }
}
