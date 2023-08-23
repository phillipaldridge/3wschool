<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * W3courses Model
 *
 * @property \App\Model\Table\W3courseTypesTable&\Cake\ORM\Association\BelongsTo $W3courseTypes
 * @property \App\Model\Table\W3userTrackingsTable&\Cake\ORM\Association\HasMany $W3userTrackings
 * @property \App\Model\Table\W3classesTable&\Cake\ORM\Association\BelongsToMany $W3classes
 * @property \App\Model\Table\W3programsTable&\Cake\ORM\Association\BelongsToMany $W3programs
 *
 * @method \App\Model\Entity\W3course newEmptyEntity()
 * @method \App\Model\Entity\W3course newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\W3course[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\W3course get($primaryKey, $options = [])
 * @method \App\Model\Entity\W3course findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\W3course patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\W3course[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\W3course|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3course saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3course[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3course[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3course[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3course[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class W3coursesTable extends Table
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

        $this->setTable('w3courses');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('W3courseTypes', [
            'foreignKey' => 'w3course_type_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('W3userTrackings', [
            'foreignKey' => 'w3course_id',
        ]);
        $this->belongsToMany('W3classes', [
            'foreignKey' => 'w3course_id',
            'targetForeignKey' => 'w3class_id',
            'joinTable' => 'w3classes_w3courses',
        ]);
        $this->belongsToMany('W3programs', [
            'foreignKey' => 'w3course_id',
            'targetForeignKey' => 'w3program_id',
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
            ->integer('w3course_type_id')
            ->notEmptyString('w3course_type_id');

        $validator
            ->boolean('active')
            ->notEmptyString('active');

        $validator
            ->scalar('reference')
            ->maxLength('reference', 20)
            ->allowEmptyString('reference');

        $validator
            ->scalar('name')
            ->maxLength('name', 10)
            ->allowEmptyString('name');

        $validator
            ->integer('unitValue')
            ->notEmptyString('unitValue');

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
        $rules->add($rules->existsIn('w3course_type_id', 'W3courseTypes'), ['errorField' => 'w3course_type_id']);

        return $rules;
    }
}
