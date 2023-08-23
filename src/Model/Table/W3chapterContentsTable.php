<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * W3chapterContents Model
 *
 * @property \App\Model\Table\W3chaptersTable&\Cake\ORM\Association\BelongsTo $W3chapters
 *
 * @method \App\Model\Entity\W3chapterContent newEmptyEntity()
 * @method \App\Model\Entity\W3chapterContent newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\W3chapterContent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\W3chapterContent get($primaryKey, $options = [])
 * @method \App\Model\Entity\W3chapterContent findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\W3chapterContent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\W3chapterContent[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\W3chapterContent|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3chapterContent saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3chapterContent[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3chapterContent[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3chapterContent[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3chapterContent[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class W3chapterContentsTable extends Table
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

        $this->setTable('w3chapter_contents');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('W3chapters', [
            'foreignKey' => 'w3chapter_id',
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
            ->integer('w3chapter_id')
            ->notEmptyString('w3chapter_id')
            ->add('w3chapter_id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->boolean('active')
            ->notEmptyString('active');

        $validator
            ->scalar('name')
            ->maxLength('name', 20)
            ->allowEmptyString('name');

        $validator
            ->scalar('content')
            ->requirePresence('content', 'create')
            ->notEmptyString('content');

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

        return $rules;
    }
}
