<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * W3users Model
 *
 * @property \App\Model\Table\W3userProfilesTable&\Cake\ORM\Association\HasOne $W3userProfiles
 * @property \App\Model\Table\W3userAddressesTable&\Cake\ORM\Association\HasMany $W3userAddresses
 * @property \App\Model\Table\W3userTrackingsTable&\Cake\ORM\Association\HasMany $W3userTrackings
 * @property \App\Model\Table\W3programrunsTable&\Cake\ORM\Association\BelongsToMany $W3programruns
 *
 * @method \App\Model\Entity\W3user newEmptyEntity()
 * @method \App\Model\Entity\W3user newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\W3user[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\W3user get($primaryKey, $options = [])
 * @method \App\Model\Entity\W3user findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\W3user patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\W3user[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\W3user|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3user saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3user[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3user[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3user[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3user[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class W3usersTable extends Table
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

        $this->setTable('w3users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasOne('W3userProfiles', [
            'foreignKey' => 'w3user_id',
        ])
        ->setDependent(true);
        
        $this->hasMany('W3userAddresses', [
            'foreignKey' => 'w3user_id',
        ]);
        $this->hasMany('W3userTrackings', [
            'foreignKey' => 'w3user_id',
        ]);
        $this->belongsToMany('W3programruns', [
            'foreignKey' => 'w3user_id',
            'targetForeignKey' => 'w3programrun_id',
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
            ->notEmptyString('level');

        $validator
            ->scalar('name')
            ->maxLength('name', 75)
            ->notEmptyString('name');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->notEmptyString('password');

        $validator
            ->email('email')
            ->notEmptyString('email');

        $validator
            ->nonNegativeInteger('revisioncount')
            ->notEmptyString('revisioncount');

        $validator
            ->nonNegativeInteger('changescount')
            ->notEmptyString('changescount');

        $validator
            ->dateTime('signuptime')
            ->notEmptyDateTime('signuptime');

        $validator
            ->dateTime('lastpassword')
            ->requirePresence('lastpassword', 'create')
            ->notEmptyDateTime('lastpassword');

        $validator
            ->dateTime('lastlogin')
            ->requirePresence('lastlogin', 'create')
            ->notEmptyDateTime('lastlogin');

        return $validator;
    }
}
