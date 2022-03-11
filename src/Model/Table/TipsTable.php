<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tips Model
 *
 * @property \App\Model\Table\StaffsTable&\Cake\ORM\Association\BelongsTo $Staffs
 *
 * @method \App\Model\Entity\Tip newEmptyEntity()
 * @method \App\Model\Entity\Tip newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Tip[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tip get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tip findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Tip patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tip[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tip|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tip saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tip[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tip[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tip[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tip[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TipsTable extends Table
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

        $this->setTable('tips');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Staffs', [
            'foreignKey' => 'staff_id',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('numberTable')
            ->maxLength('numberTable', 255)
            ->requirePresence('numberTable', 'create')
            ->notEmptyString('numberTable');

        $validator
            ->scalar('amountTable')
            ->maxLength('amountTable', 255)
            ->requirePresence('amountTable', 'create')
            ->notEmptyString('amountTable');

        $validator
            ->scalar('payment')
            ->maxLength('payment', 20)
            ->requirePresence('payment', 'create')
            ->notEmptyString('payment');

        $validator
            ->scalar('amountTip')
            ->maxLength('amountTip', 255)
            ->requirePresence('amountTip', 'create')
            ->notEmptyString('amountTip');

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
        $rules->add($rules->existsIn('staff_id', 'Staffs'), ['errorField' => 'staff_id']);

        return $rules;
    }
}
