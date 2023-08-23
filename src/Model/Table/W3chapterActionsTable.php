<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * W3chapterActions Model
 *
 * @property \App\Model\Table\W3chapterPathsTable&\Cake\ORM\Association\HasMany $W3chapterPaths
 *
 * @method \App\Model\Entity\W3chapterAction newEmptyEntity()
 * @method \App\Model\Entity\W3chapterAction newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\W3chapterAction[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\W3chapterAction get($primaryKey, $options = [])
 * @method \App\Model\Entity\W3chapterAction findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\W3chapterAction patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\W3chapterAction[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\W3chapterAction|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3chapterAction saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3chapterAction[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3chapterAction[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3chapterAction[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3chapterAction[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class W3chapterActionsTable extends Table
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

        $this->setTable('w3chapter_actions');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('W3chapterPaths', [
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
            ->scalar('name')
            ->maxLength('name', 20)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('content')
            ->allowEmptyString('content');

        return $validator;
    }
}
