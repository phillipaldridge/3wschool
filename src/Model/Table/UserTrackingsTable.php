<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserTrackings Model
 *
 * @property \App\Model\Table\ProgramrunsTable&\Cake\ORM\Association\BelongsTo $Programruns
 * @property \App\Model\Table\ProgramsTable&\Cake\ORM\Association\BelongsTo $Programs
 * @property \App\Model\Table\CoursesTable&\Cake\ORM\Association\BelongsTo $Courses
 * @property \App\Model\Table\LessonsTable&\Cake\ORM\Association\BelongsTo $Lessons
 * @property \App\Model\Table\ChaptersTable&\Cake\ORM\Association\BelongsTo $Chapters
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\UserTracking newEmptyEntity()
 * @method \App\Model\Entity\UserTracking newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\UserTracking[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserTracking get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserTracking findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\UserTracking patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserTracking[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserTracking|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserTracking saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserTracking[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UserTracking[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\UserTracking[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UserTracking[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UserTrackingsTable extends Table
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

        $this->setTable('user_trackings');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Programruns', [
            'foreignKey' => 'programrun_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Programs', [
            'foreignKey' => 'program_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Courses', [
            'foreignKey' => 'course_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Lessons', [
            'foreignKey' => 'lesson_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Chapters', [
            'foreignKey' => 'chapter_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->nonNegativeInteger('programrun_id')
            ->notEmptyString('programrun_id');

        $validator
            ->nonNegativeInteger('program_id')
            ->notEmptyString('program_id');

        $validator
            ->nonNegativeInteger('course_id')
            ->notEmptyString('course_id');

        $validator
            ->nonNegativeInteger('class_id')
            ->requirePresence('class_id', 'create')
            ->notEmptyString('class_id');

        $validator
            ->nonNegativeInteger('lesson_id')
            ->notEmptyString('lesson_id');

        $validator
            ->nonNegativeInteger('chapter_id')
            ->notEmptyString('chapter_id');

        $validator
            ->nonNegativeInteger('user_id')
            ->notEmptyString('user_id');

        $validator
            ->notEmptyString('score');

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
        $rules->add($rules->existsIn('programrun_id', 'Programruns'), ['errorField' => 'programrun_id']);
        $rules->add($rules->existsIn('program_id', 'Programs'), ['errorField' => 'program_id']);
        $rules->add($rules->existsIn('course_id', 'Courses'), ['errorField' => 'course_id']);
        $rules->add($rules->existsIn('lesson_id', 'Lessons'), ['errorField' => 'lesson_id']);
        $rules->add($rules->existsIn('chapter_id', 'Chapters'), ['errorField' => 'chapter_id']);
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
