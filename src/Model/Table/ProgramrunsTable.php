<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Programruns Model
 *
 * @property \App\Model\Table\ProgramsTable&\Cake\ORM\Association\BelongsTo $Programs
 * @property \App\Model\Table\ProgramrunTypesTable&\Cake\ORM\Association\BelongsTo $ProgramrunTypes
 * @property \App\Model\Table\UserTrackingsTable&\Cake\ORM\Association\HasMany $UserTrackings
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\Programrun newEmptyEntity()
 * @method \App\Model\Entity\Programrun newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Programrun[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Programrun get($primaryKey, $options = [])
 * @method \App\Model\Entity\Programrun findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Programrun patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Programrun[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Programrun|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Programrun saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Programrun[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Programrun[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Programrun[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Programrun[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProgramrunsTable extends Table
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

        $this->setTable('programruns');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Programs', [
            'foreignKey' => 'program_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('ProgramrunTypes', [
            'foreignKey' => 'programrun_type_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('UserTrackings', [
            'foreignKey' => 'programrun_id',
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'programrun_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'programruns_users',
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
            ->nonNegativeInteger('program_id')
            ->notEmptyString('program_id');

        $validator
            ->nonNegativeInteger('programrun_type_id')
            ->notEmptyString('programrun_type_id');

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
        $rules->add($rules->existsIn('program_id', 'Programs'), ['errorField' => 'program_id']);
        $rules->add($rules->existsIn('programrun_type_id', 'ProgramrunTypes'), ['errorField' => 'programrun_type_id']);

        return $rules;
    }
}
