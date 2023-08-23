<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * W3userProfiles Model
 *
 * @property \App\Model\Table\W3usersTable&\Cake\ORM\Association\BelongsTo $W3users
 *
 * @method \App\Model\Entity\W3userProfile newEmptyEntity()
 * @method \App\Model\Entity\W3userProfile newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\W3userProfile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\W3userProfile get($primaryKey, $options = [])
 * @method \App\Model\Entity\W3userProfile findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\W3userProfile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\W3userProfile[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\W3userProfile|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3userProfile saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3userProfile[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3userProfile[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3userProfile[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3userProfile[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class W3userProfilesTable extends Table
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

        $this->setTable('w3user_profiles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

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
            ->nonNegativeInteger('w3user_id')
            ->notEmptyString('w3user_id')
            ->add('w3user_id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->boolean('active')
            ->notEmptyString('active');

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
        $rules->add($rules->existsIn('w3user_id', 'W3users'), ['errorField' => 'w3user_id']);

        return $rules;
    }
}
