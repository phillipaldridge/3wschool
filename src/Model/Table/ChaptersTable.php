<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Chapters Model
 *
 * @property \App\Model\Table\LessonsTable&\Cake\ORM\Association\BelongsTo $Lessons
 * @property \App\Model\Table\ChapterTypesTable&\Cake\ORM\Association\BelongsTo $ChapterTypes
 * @property \App\Model\Table\ChapterAccessesTable&\Cake\ORM\Association\BelongsTo $ChapterAccesses
 * @property \App\Model\Table\ChapterContentsTable&\Cake\ORM\Association\HasMany $ChapterContents
 * @property \App\Model\Table\ChapterPathsTable&\Cake\ORM\Association\HasMany $ChapterPaths
 * @property \App\Model\Table\UserTrackingsTable&\Cake\ORM\Association\HasMany $UserTrackings
 *
 * @method \App\Model\Entity\Chapter newEmptyEntity()
 * @method \App\Model\Entity\Chapter newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Chapter[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Chapter get($primaryKey, $options = [])
 * @method \App\Model\Entity\Chapter findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Chapter patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Chapter[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Chapter|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Chapter saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Chapter[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Chapter[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Chapter[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Chapter[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ChaptersTable extends Table
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

        $this->setTable('chapters');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Lessons', [
            'foreignKey' => 'lesson_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('ChapterTypes', [
            'foreignKey' => 'chapter_type_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('ChapterAccesses', [
            'foreignKey' => 'chapter_access_id',
        ]);
        $this->hasMany('ChapterContents', [
            'foreignKey' => 'chapter_id',
        ]);
        $this->hasMany('ChapterPaths', [
            'foreignKey' => 'chapter_id',
        ]);
        $this->hasMany('UserTrackings', [
            'foreignKey' => 'chapter_id',
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
            ->nonNegativeInteger('lesson_id')
            ->notEmptyString('lesson_id');

        $validator
            ->nonNegativeInteger('chapter_type_id')
            ->notEmptyString('chapter_type_id');

        $validator
            ->nonNegativeInteger('chapter_access_id')
            ->allowEmptyString('chapter_access_id');

        $validator
            ->scalar('reference')
            ->maxLength('reference', 20)
            ->allowEmptyString('reference');

        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->allowEmptyString('name');

        $validator
            ->boolean('active')
            ->notEmptyString('active');

        $validator
            ->integer('position')
            ->notEmptyString('position');

        $validator
            ->integer('unitValue')
            ->notEmptyString('unitValue');

        $validator
            ->nonNegativeInteger('passValue')
            ->allowEmptyString('passValue');

        $validator
            ->integer('failValue')
            ->allowEmptyString('failValue');

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
        $rules->add($rules->existsIn('lesson_id', 'Lessons'), ['errorField' => 'lesson_id']);
        $rules->add($rules->existsIn('chapter_type_id', 'ChapterTypes'), ['errorField' => 'chapter_type_id']);
        $rules->add($rules->existsIn('chapter_access_id', 'ChapterAccesses'), ['errorField' => 'chapter_access_id']);

        return $rules;
    }
}
