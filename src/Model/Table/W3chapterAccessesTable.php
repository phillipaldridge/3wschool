<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * W3chapterAccesses Model
 *
 * @property \App\Model\Table\W3chaptersTable&\Cake\ORM\Association\HasMany $W3chapters
 *
 * @method \App\Model\Entity\W3chapterAccess newEmptyEntity()
 * @method \App\Model\Entity\W3chapterAccess newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\W3chapterAccess[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\W3chapterAccess get($primaryKey, $options = [])
 * @method \App\Model\Entity\W3chapterAccess findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\W3chapterAccess patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\W3chapterAccess[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\W3chapterAccess|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3chapterAccess saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\W3chapterAccess[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3chapterAccess[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3chapterAccess[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\W3chapterAccess[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class W3chapterAccessesTable extends Table
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

        $this->setTable('w3chapter_accesses');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('W3chapters', [
            'foreignKey' => 'w3chapter_access_id',
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
