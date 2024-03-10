<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lessons Model
 *
 * @property \App\Model\Table\LessonTypesTable&\Cake\ORM\Association\BelongsTo $LessonTypes
 * @property \App\Model\Table\ChaptersTable&\Cake\ORM\Association\HasMany $Chapters
 * @property \App\Model\Table\UserTrackingsTable&\Cake\ORM\Association\HasMany $UserTrackings
 * @property \App\Model\Table\ClassroomsTable&\Cake\ORM\Association\BelongsToMany $Classrooms
 *
 * @method \App\Model\Entity\Lesson newEmptyEntity()
 * @method \App\Model\Entity\Lesson newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Lesson[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lesson get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lesson findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Lesson patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lesson[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lesson|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lesson saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lesson[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Lesson[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Lesson[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Lesson[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LessonsTable extends Table
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

        $this->setTable('lessons');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('LessonTypes', [
            'foreignKey' => 'lesson_type_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Chapters', [
            'foreignKey' => 'lesson_id',
        ]);
        $this->hasMany('UserTrackings', [
            'foreignKey' => 'lesson_id',
        ]);
        $this->belongsToMany('Classrooms', [
            'foreignKey' => 'lesson_id',
            'targetForeignKey' => 'classroom_id',
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
            ->nonNegativeInteger('lesson_type_id')
            ->notEmptyString('lesson_type_id');

        $validator
            ->boolean('active')
            ->notEmptyString('active');

        $validator
            ->nonNegativeInteger('position')
            ->allowEmptyString('position');

        $validator
            ->scalar('access')
            ->maxLength('access', 10)
            ->allowEmptyString('access');

        $validator
            ->scalar('reference')
            ->maxLength('reference', 20)
            ->allowEmptyString('reference');

        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->allowEmptyString('name');

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
        $rules->add($rules->existsIn('lesson_type_id', 'LessonTypes'), ['errorField' => 'lesson_type_id']);

        return $rules;
    }
}
