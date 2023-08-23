<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * W3lessons Model
 *
 * @property \App\Model\Table\W3lessonTypesTable&\Cake\ORM\Association\BelongsTo $W3lessonTypes
 * @property \App\Model\Table\W3chaptersTable&\Cake\ORM\Association\HasMany $W3chapters
 * @property \App\Model\Table\W3userTrackingsTable&\Cake\ORM\Association\HasMany $W3userTrackings
 * @property \App\Model\Table\W3classesTable&\Cake\ORM\Association\BelongsToMany $W3classes
 *
 * @method \App\Model\Entity\W3lesson newEmptyEntity()
 * @method \App\Model\Entity\W3lesson newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\W3lesson[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\W3lesson get($primaryKey, $options = [])
 * @method \App\Model\Entity\W3lesson findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\W3lesson patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\W3lesson[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\W3lesson|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3lesson saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3lesson[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3lesson[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3lesson[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3lesson[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class W3lessonsTable extends Table
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

        $this->setTable('w3lessons');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('W3lessonTypes', [
            'foreignKey' => 'w3lesson_type_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('W3chapters', [
            'foreignKey' => 'w3lesson_id',
        ]);
        $this->hasMany('W3userTrackings', [
            'foreignKey' => 'w3lesson_id',
        ]);
        $this->belongsToMany('W3classes', [
            'foreignKey' => 'w3lesson_id',
            'targetForeignKey' => 'w3class_id',
            'joinTable' => 'w3classes_w3lessons',
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
            ->nonNegativeInteger('w3lesson_type_id')
            ->notEmptyString('w3lesson_type_id');

        $validator
            ->boolean('active')
            ->notEmptyString('active');

        $validator
            ->nonNegativeInteger('position')
            ->allowEmptyString('position');

        $validator
            ->scalar('access')
            ->maxLength('access', 10)
            ->allowEmptyString('access');

        $validator
            ->scalar('reference')
            ->maxLength('reference', 20)
            ->allowEmptyString('reference');

        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->allowEmptyString('name');

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
        $rules->add($rules->existsIn('w3lesson_type_id', 'W3lessonTypes'), ['errorField' => 'w3lesson_type_id']);

        return $rules;
    }
}
