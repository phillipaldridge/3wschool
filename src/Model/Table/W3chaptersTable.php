<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * W3chapters Model
 *
 * @property \App\Model\Table\W3lessonsTable&\Cake\ORM\Association\BelongsTo $W3lessons
 * @property \App\Model\Table\W3chapterTypesTable&\Cake\ORM\Association\BelongsTo $W3chapterTypes
 * @property \App\Model\Table\W3chapterAccessesTable&\Cake\ORM\Association\BelongsTo $W3chapterAccesses
 * @property \App\Model\Table\W3chapterContentsTable&\Cake\ORM\Association\HasOne $W3chapterContents
 * @property \App\Model\Table\W3chapterPathsTable&\Cake\ORM\Association\HasMany $W3chapterPaths
 * @property \App\Model\Table\W3userTrackingsTable&\Cake\ORM\Association\HasMany $W3userTrackings
 *
 * @method \App\Model\Entity\W3chapter newEmptyEntity()
 * @method \App\Model\Entity\W3chapter newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\W3chapter[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\W3chapter get($primaryKey, $options = [])
 * @method \App\Model\Entity\W3chapter findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\W3chapter patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\W3chapter[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\W3chapter|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3chapter saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3chapter[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3chapter[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3chapter[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3chapter[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class W3chaptersTable extends Table
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

        $this->setTable('w3chapters');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('W3lessons', [
            'foreignKey' => 'w3lesson_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('W3chapterTypes', [
            'foreignKey' => 'w3chapter_type_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('W3chapterAccesses', [
            'foreignKey' => 'w3chapter_access_id',
        ]);
        $this->hasOne('W3chapterContents', [
            'foreignKey' => 'w3chapter_id',
        ]);
        $this->hasMany('W3chapterPaths', [
            'foreignKey' => 'w3chapter_id',
        ]);
        $this->hasMany('W3userTrackings', [
            'foreignKey' => 'w3chapter_id',
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
            ->nonNegativeInteger('w3lesson_id')
            ->notEmptyString('w3lesson_id');

        $validator
            ->nonNegativeInteger('w3chapter_type_id')
            ->notEmptyString('w3chapter_type_id');

        $validator
            ->nonNegativeInteger('w3chapter_access_id')
            ->allowEmptyString('w3chapter_access_id');

        $validator
            ->scalar('reference')
            ->maxLength('reference', 20)
            ->allowEmptyString('reference');

        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->allowEmptyString('name');

        $validator
            ->boolean('active')
            ->notEmptyString('active');

        $validator
            ->integer('position')
            ->notEmptyString('position');

        $validator
            ->scalar('access')
            ->maxLength('access', 10)
            ->allowEmptyString('access');

        $validator
            ->integer('unitValue')
            ->notEmptyString('unitValue');

        $validator
            ->nonNegativeInteger('passValue')
            ->allowEmptyString('passValue');

        $validator
            ->integer('failValue')
            ->allowEmptyString('failValue');

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
        $rules->add($rules->existsIn('w3lesson_id', 'W3lessons'), ['errorField' => 'w3lesson_id']);
        $rules->add($rules->existsIn('w3chapter_type_id', 'W3chapterTypes'), ['errorField' => 'w3chapter_type_id']);
        $rules->add($rules->existsIn('w3chapter_access_id', 'W3chapterAccesses'), ['errorField' => 'w3chapter_access_id']);

        return $rules;
    }
}
