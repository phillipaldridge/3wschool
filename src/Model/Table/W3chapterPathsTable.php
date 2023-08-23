<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * W3chapterPaths Model
 *
 * @property \App\Model\Table\W3chaptersTable&\Cake\ORM\Association\BelongsTo $W3chapters
 * @property \App\Model\Table\W3chapterRulesTable&\Cake\ORM\Association\BelongsTo $W3chapterRules
 * @property \App\Model\Table\W3chapterActionsTable&\Cake\ORM\Association\BelongsTo $W3chapterActions
 *
 * @method \App\Model\Entity\W3chapterPath newEmptyEntity()
 * @method \App\Model\Entity\W3chapterPath newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\W3chapterPath[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\W3chapterPath get($primaryKey, $options = [])
 * @method \App\Model\Entity\W3chapterPath findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\W3chapterPath patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\W3chapterPath[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\W3chapterPath|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3chapterPath saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3chapterPath[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3chapterPath[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3chapterPath[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3chapterPath[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class W3chapterPathsTable extends Table
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

        $this->setTable('w3chapter_paths');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('W3chapters', [
            'foreignKey' => 'w3chapter_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('W3chapterRules', [
            'foreignKey' => 'w3chapter_rule_id',
        ]);
        $this->belongsTo('W3chapterActions', [
            'foreignKey' => 'w3chapter_action_id',
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
            ->nonNegativeInteger('w3chapter_id')
            ->notEmptyString('w3chapter_id');

        $validator
            ->nonNegativeInteger('w3chapter2_id')
            ->requirePresence('w3chapter2_id', 'create')
            ->notEmptyString('w3chapter2_id');

        $validator
            ->nonNegativeInteger('w3chapter_rule_id')
            ->allowEmptyString('w3chapter_rule_id');

        $validator
            ->nonNegativeInteger('w3chapter_action_id')
            ->allowEmptyString('w3chapter_action_id');

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
        $rules->add($rules->existsIn('w3chapter_id', 'W3chapters'), ['errorField' => 'w3chapter_id']);
        $rules->add($rules->existsIn('w3chapter_rule_id', 'W3chapterRules'), ['errorField' => 'w3chapter_rule_id']);
        $rules->add($rules->existsIn('w3chapter_action_id', 'W3chapterActions'), ['errorField' => 'w3chapter_action_id']);

        return $rules;
    }
}
