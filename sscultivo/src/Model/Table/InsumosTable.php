<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Insumos Model
 *
 * @property \App\Model\Table\CultivosTable&\Cake\ORM\Association\BelongsTo $Cultivos
 *
 * @method \App\Model\Entity\Insumo newEmptyEntity()
 * @method \App\Model\Entity\Insumo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Insumo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Insumo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Insumo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Insumo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Insumo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Insumo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Insumo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Insumo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Insumo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Insumo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Insumo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class InsumosTable extends Table
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

        $this->setTable('insumos');
        $this->setDisplayField('id_insumos');
        $this->setPrimaryKey('id_insumos');

        $this->belongsTo('Cultivos', [
            'foreignKey' => 'cultivos_id',
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
            ->integer('id_insumos')
            ->allowEmptyString('id_insumos', null, 'create');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 45)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->numeric('precio_unitario')
            ->requirePresence('precio_unitario', 'create')
            ->notEmptyString('precio_unitario');

        $validator
            ->numeric('precio_total')
            ->requirePresence('precio_total', 'create')
            ->notEmptyString('precio_total');

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
        $rules->add($rules->existsIn(['cultivos_id'], 'Cultivos'), ['errorField' => 'cultivos_id']);

        return $rules;
    }
}
