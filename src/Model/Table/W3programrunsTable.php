<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * W3programruns Model
 *
 * @property \App\Model\Table\W3programsTable&\Cake\ORM\Association\BelongsTo $W3programs
 * @property \App\Model\Table\W3programrunTypesTable&\Cake\ORM\Association\BelongsTo $W3programrunTypes
 * @property \App\Model\Table\W3userTrackingsTable&\Cake\ORM\Association\HasMany $W3userTrackings
 * @property \App\Model\Table\W3usersTable&\Cake\ORM\Association\BelongsToMany $W3users
 *
 * @method \App\Model\Entity\W3programrun newEmptyEntity()
 * @method \App\Model\Entity\W3programrun newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\W3programrun[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\W3programrun get($primaryKey, $options = [])
 * @method \App\Model\Entity\W3programrun findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\W3programrun patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\W3programrun[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\W3programrun|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3programrun saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3programrun[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3programrun[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3programrun[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3programrun[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class W3programrunsTable extends Table
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

        $this->setTable('w3programruns');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('W3programs', [
            'foreignKey' => 'w3program_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('W3programrunTypes', [
            'foreignKey' => 'w3programrun_type_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('W3userTrackings', [
            'foreignKey' => 'w3programrun_id',
        ]);
        $this->belongsToMany('W3users', [
            'foreignKey' => 'w3programrun_id',
            'targetForeignKey' => 'w3user_id',
            'joinTable' => 'w3programruns_w3users',
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
            ->boolean('active')
            ->notEmptyString('active');

        $validator
            ->nonNegativeInteger('w3program_id')
            ->notEmptyString('w3program_id');

        $validator
            ->nonNegativeInteger('w3programrun_type_id')
            ->notEmptyString('w3programrun_type_id');

        $validator
            ->scalar('name')
            ->maxLength('name', 20)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('reference')
            ->maxLength('reference', 20)
            ->requirePresence('reference', 'create')
            ->notEmptyString('reference');

        $validator
            ->date('dateStart')
            ->allowEmptyDate('dateStart');

        $validator
            ->date('dateEnd')
            ->allowEmptyDate('dateEnd');

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
        $rules->add($rules->existsIn('w3program_id', 'W3programs'), ['errorField' => 'w3program_id']);
        $rules->add($rules->existsIn('w3programrun_type_id', 'W3programrunTypes'), ['errorField' => 'w3programrun_type_id']);

        return $rules;
    }
}
