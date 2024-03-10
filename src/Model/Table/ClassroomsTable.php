<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Classrooms Model
 *
 * @property \App\Model\Table\ClassroomTypesTable&\Cake\ORM\Association\BelongsTo $ClassroomTypes
 * @property \App\Model\Table\CoursesTable&\Cake\ORM\Association\BelongsToMany $Courses
 * @property \App\Model\Table\LessonsTable&\Cake\ORM\Association\BelongsToMany $Lessons
 *
 * @method \App\Model\Entity\Classroom newEmptyEntity()
 * @method \App\Model\Entity\Classroom newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Classroom[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Classroom get($primaryKey, $options = [])
 * @method \App\Model\Entity\Classroom findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Classroom patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Classroom[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Classroom|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Classroom saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Classroom[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Classroom[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Classroom[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Classroom[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ClassroomsTable extends Table
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

        $this->setTable('classrooms');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ClassroomTypes', [
            'foreignKey' => 'classroom_type_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsToMany('Courses', [
            'foreignKey' => 'classroom_id',
            'targetForeignKey' => 'course_id',
            'joinTable' => 'classrooms_courses',
        ]);
        $this->belongsToMany('Lessons', [
            'foreignKey' => 'classroom_id',
            'targetForeignKey' => 'lesson_id',
            'joinTable' => 'classrooms_lessons',
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
            ->integer('classroom_type_id')
            ->notEmptyString('classroom_type_id');

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
        $rules->add($rules->existsIn('classroom_type_id', 'ClassroomTypes'), ['errorField' => 'classroom_type_id']);

        return $rules;
    }
}
