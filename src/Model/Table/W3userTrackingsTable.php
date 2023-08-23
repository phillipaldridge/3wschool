<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * W3userTrackings Model
 *
 * @property \App\Model\Table\W3programrunsTable&\Cake\ORM\Association\BelongsTo $W3programruns
 * @property \App\Model\Table\W3programsTable&\Cake\ORM\Association\BelongsTo $W3programs
 * @property \App\Model\Table\W3coursesTable&\Cake\ORM\Association\BelongsTo $W3courses
 * @property \App\Model\Table\W3classesTable&\Cake\ORM\Association\BelongsTo $W3classes
 * @property \App\Model\Table\W3lessonsTable&\Cake\ORM\Association\BelongsTo $W3lessons
 * @property \App\Model\Table\W3chaptersTable&\Cake\ORM\Association\BelongsTo $W3chapters
 * @property \App\Model\Table\W3usersTable&\Cake\ORM\Association\BelongsTo $W3users
 *
 * @method \App\Model\Entity\W3userTracking newEmptyEntity()
 * @method \App\Model\Entity\W3userTracking newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\W3userTracking[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\W3userTracking get($primaryKey, $options = [])
 * @method \App\Model\Entity\W3userTracking findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\W3userTracking patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\W3userTracking[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\W3userTracking|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3userTracking saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3userTracking[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3userTracking[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3userTracking[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3userTracking[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class W3userTrackingsTable extends Table
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

        $this->setTable('w3user_trackings');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('W3programruns', [
            'foreignKey' => 'w3programrun_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('W3programs', [
            'foreignKey' => 'w3program_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('W3courses', [
            'foreignKey' => 'w3course_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('W3classes', [
            'foreignKey' => 'w3class_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('W3lessons', [
            'foreignKey' => 'w3lesson_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('W3chapters', [
            'foreignKey' => 'w3chapter_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('W3users', [
            'foreignKey' => 'w3user_id',
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
            ->nonNegativeInteger('w3programrun_id')
            ->notEmptyString('w3programrun_id');

        $validator
            ->nonNegativeInteger('w3program_id')
            ->notEmptyString('w3program_id');

        $validator
            ->nonNegativeInteger('w3course_id')
            ->notEmptyString('w3course_id');

        $validator
            ->nonNegativeInteger('w3class_id')
            ->notEmptyString('w3class_id');

        $validator
            ->nonNegativeInteger('w3lesson_id')
            ->notEmptyString('w3lesson_id');

        $validator
            ->nonNegativeInteger('w3chapter_id')
            ->notEmptyString('w3chapter_id');

        $validator
            ->nonNegativeInteger('w3user_id')
            ->notEmptyString('w3user_id');

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
        $rules->add($rules->existsIn('w3programrun_id', 'W3programruns'), ['errorField' => 'w3programrun_id']);
        $rules->add($rules->existsIn('w3program_id', 'W3programs'), ['errorField' => 'w3program_id']);
        $rules->add($rules->existsIn('w3course_id', 'W3courses'), ['errorField' => 'w3course_id']);
        $rules->add($rules->existsIn('w3class_id', 'W3classes'), ['errorField' => 'w3class_id']);
        $rules->add($rules->existsIn('w3lesson_id', 'W3lessons'), ['errorField' => 'w3lesson_id']);
        $rules->add($rules->existsIn('w3chapter_id', 'W3chapters'), ['errorField' => 'w3chapter_id']);
        $rules->add($rules->existsIn('w3user_id', 'W3users'), ['errorField' => 'w3user_id']);

        return $rules;
    }
}
