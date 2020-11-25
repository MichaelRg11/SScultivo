<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MonitoreoTr Model
 *
 * @method \App\Model\Entity\MonitoreoTr newEmptyEntity()
 * @method \App\Model\Entity\MonitoreoTr newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\MonitoreoTr[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MonitoreoTr get($primaryKey, $options = [])
 * @method \App\Model\Entity\MonitoreoTr findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\MonitoreoTr patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MonitoreoTr[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\MonitoreoTr|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MonitoreoTr saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MonitoreoTr[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MonitoreoTr[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\MonitoreoTr[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MonitoreoTr[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MonitoreoTrTable extends Table
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

        $this->setTable('monitoreo_tr');
        $this->setDisplayField('idmonitoreo_TR');
        $this->setPrimaryKey('idmonitoreo_TR');

        $this->belongsTo('Cultivos', [
            'foreignKey' => 'cultivos_id1',
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
            ->integer('idmonitoreo_TR')
            ->allowEmptyString('idmonitoreo_TR', null, 'create');

        $validator
            ->date('fecha_TR')
            ->requirePresence('fecha_TR', 'create')
            ->notEmptyDate('fecha_TR');

        $validator
            ->scalar('ph')
            ->maxLength('ph', 45)
            ->requirePresence('ph', 'create')
            ->notEmptyString('ph');

        $validator
            ->integer('humedad')
            ->requirePresence('humedad', 'create')
            ->notEmptyString('humedad');

        $validator
            ->scalar('nitrogeno')
            ->maxLength('nitrogeno', 45)
            ->requirePresence('nitrogeno', 'create')
            ->notEmptyString('nitrogeno');

        $validator
            ->scalar('fosforo')
            ->maxLength('fosforo', 45)
            ->requirePresence('fosforo', 'create')
            ->notEmptyString('fosforo');

        $validator
            ->scalar('potasio')
            ->maxLength('potasio', 45)
            ->requirePresence('potasio', 'create')
            ->notEmptyString('potasio');

        $validator
            ->scalar('dioxidoCB')
            ->maxLength('dioxidoCB', 45)
            ->requirePresence('dioxidoCB', 'create')
            ->notEmptyString('dioxidoCB');

        $validator
            ->scalar('comentario')
            ->maxLength('comentario', 45)
            ->requirePresence('comentario', 'create')
            ->notEmptyString('comentario');

        $validator
            ->integer('cultivos_id1')
            ->requirePresence('cultivos_id1', 'create')
            ->notEmptyString('cultivos_id1');

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
        $rules->add($rules->existsIn(['cultivos_id1'], 'Cultivos'), ['errorField' => 'cultivos_id1']);

        return $rules;
    }
}
