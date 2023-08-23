<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * W3programs Model
 *
 * @property \App\Model\Table\W3programTypesTable&\Cake\ORM\Association\BelongsTo $W3programTypes
 * @property \App\Model\Table\W3programrunsTable&\Cake\ORM\Association\HasMany $W3programruns
 * @property \App\Model\Table\W3userTrackingsTable&\Cake\ORM\Association\HasMany $W3userTrackings
 * @property \App\Model\Table\W3coursesTable&\Cake\ORM\Association\BelongsToMany $W3courses
 *
 * @method \App\Model\Entity\W3program newEmptyEntity()
 * @method \App\Model\Entity\W3program newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\W3program[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\W3program get($primaryKey, $options = [])
 * @method \App\Model\Entity\W3program findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\W3program patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\W3program[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\W3program|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3program saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3program[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3program[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3program[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3program[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class W3programsTable extends Table
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

        $this->setTable('w3programs');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('W3programTypes', [
            'foreignKey' => 'w3program_type_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('W3programruns', [
            'foreignKey' => 'w3program_id',
        ]);
        $this->hasMany('W3userTrackings', [
            'foreignKey' => 'w3program_id',
        ]);
        $this->belongsToMany('W3courses', [
            'foreignKey' => 'w3program_id',
            'targetForeignKey' => 'w3course_id',
            'joinTable' => 'w3courses_w3programs',
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
            ->integer('w3program_type_id')
            ->notEmptyString('w3program_type_id');

        $validator
            ->scalar('reference')
            ->maxLength('reference', 20)
            ->allowEmptyString('reference');

        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->allowEmptyString('name');

        $validator
            ->integer('total_units_needed')
            ->allowEmptyString('total_units_needed');

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
        $rules->add($rules->existsIn('w3program_type_id', 'W3programTypes'), ['errorField' => 'w3program_type_id']);

        return $rules;
    }
}
