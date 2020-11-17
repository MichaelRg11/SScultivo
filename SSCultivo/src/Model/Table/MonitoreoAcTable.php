<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MonitoreoAc Model
 *
 * @method \App\Model\Entity\MonitoreoAc newEmptyEntity()
 * @method \App\Model\Entity\MonitoreoAc newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\MonitoreoAc[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MonitoreoAc get($primaryKey, $options = [])
 * @method \App\Model\Entity\MonitoreoAc findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\MonitoreoAc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MonitoreoAc[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\MonitoreoAc|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MonitoreoAc saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MonitoreoAc[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MonitoreoAc[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\MonitoreoAc[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MonitoreoAc[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MonitoreoAcTable extends Table
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

        $this->setTable('monitoreo_ac');
        $this->setDisplayField('idmonitoreo_AC');
        $this->setPrimaryKey('idmonitoreo_AC');
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
            ->integer('idmonitoreo_AC')
            ->allowEmptyString('idmonitoreo_AC', null, 'create');

        $validator
            ->date('fecha_AC')
            ->requirePresence('fecha_AC', 'create')
            ->notEmptyDate('fecha_AC');

        $validator
            ->scalar('temperatura')
            ->maxLength('temperatura', 45)
            ->requirePresence('temperatura', 'create')
            ->notEmptyString('temperatura');

        $validator
            ->scalar('nitrogeno')
            ->maxLength('nitrogeno', 45)
            ->requirePresence('nitrogeno', 'create')
            ->notEmptyString('nitrogeno');

        $validator
            ->scalar('nitritos')
            ->maxLength('nitritos', 45)
            ->requirePresence('nitritos', 'create')
            ->notEmptyString('nitritos');

        $validator
            ->scalar('oxigeno_disuelto')
            ->maxLength('oxigeno_disuelto', 45)
            ->requirePresence('oxigeno_disuelto', 'create')
            ->notEmptyString('oxigeno_disuelto');

        $validator
            ->scalar('proteina_alimento')
            ->maxLength('proteina_alimento', 45)
            ->requirePresence('proteina_alimento', 'create')
            ->notEmptyString('proteina_alimento');

        $validator
            ->scalar('ph')
            ->maxLength('ph', 45)
            ->requirePresence('ph', 'create')
            ->notEmptyString('ph');

        $validator
            ->scalar('tiempo_crecimiento')
            ->maxLength('tiempo_crecimiento', 45)
            ->requirePresence('tiempo_crecimiento', 'create')
            ->notEmptyString('tiempo_crecimiento');

        $validator
            ->scalar('exposicion_solar')
            ->maxLength('exposicion_solar', 45)
            ->requirePresence('exposicion_solar', 'create')
            ->notEmptyString('exposicion_solar');

        $validator
            ->scalar('comentario')
            ->maxLength('comentario', 45)
            ->requirePresence('comentario', 'create')
            ->notEmptyString('comentario');

        $validator
            ->integer('cultivos_id2')
            ->requirePresence('cultivos_id2', 'create')
            ->notEmptyString('cultivos_id2');

        return $validator;
    }
}
