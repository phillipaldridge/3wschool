<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ChapterPaths Model
 *
 * @property \App\Model\Table\ChaptersTable&\Cake\ORM\Association\BelongsTo $Chapters
 * @property \App\Model\Table\ChapterRulesTable&\Cake\ORM\Association\BelongsTo $ChapterRules
 * @property \App\Model\Table\ChapterActionsTable&\Cake\ORM\Association\BelongsTo $ChapterActions
 *
 * @method \App\Model\Entity\ChapterPath newEmptyEntity()
 * @method \App\Model\Entity\ChapterPath newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ChapterPath[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ChapterPath get($primaryKey, $options = [])
 * @method \App\Model\Entity\ChapterPath findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ChapterPath patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ChapterPath[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ChapterPath|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ChapterPath saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ChapterPath[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ChapterPath[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ChapterPath[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ChapterPath[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ChapterPathsTable extends Table
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

        $this->setTable('chapter_paths');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Chapters', [
            'foreignKey' => 'chapter_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('ChapterRules', [
            'foreignKey' => 'chapter_rule_id',
        ]);
        $this->belongsTo('ChapterActions', [
            'foreignKey' => 'chapter_action_id',
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
            ->nonNegativeInteger('chapter_id')
            ->notEmptyString('chapter_id');

        $validator
            ->nonNegativeInteger('chapter_target_id')
            ->requirePresence('chapter_target_id', 'create')
            ->notEmptyString('chapter_target_id');

        $validator
            ->nonNegativeInteger('chapter_rule_id')
            ->allowEmptyString('chapter_rule_id');

        $validator
            ->nonNegativeInteger('chapter_action_id')
            ->allowEmptyString('chapter_action_id');

        $validator
            ->integer('score')
            ->requirePresence('score', 'create')
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
        $rules->add($rules->existsIn('chapter_id', 'Chapters'), ['errorField' => 'chapter_id']);
        $rules->add($rules->existsIn('chapter_rule_id', 'ChapterRules'), ['errorField' => 'chapter_rule_id']);
        $rules->add($rules->existsIn('chapter_action_id', 'ChapterActions'), ['errorField' => 'chapter_action_id']);

        return $rules;
    }
}
