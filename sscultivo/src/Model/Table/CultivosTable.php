<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cultivos Model
 *
 * @property \App\Model\Table\UsuariosTable&\Cake\ORM\Association\BelongsTo $Usuarios
 *
 * @method \App\Model\Entity\Cultivo newEmptyEntity()
 * @method \App\Model\Entity\Cultivo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Cultivo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cultivo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cultivo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Cultivo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cultivo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cultivo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cultivo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cultivo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cultivo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cultivo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cultivo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CultivosTable extends Table
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

        $this->setTable('cultivos');
        $this->setDisplayField('id_cultivos');
        $this->setPrimaryKey('id_cultivos');

        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id',
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
            ->integer('id_cultivos')
            ->allowEmptyString('id_cultivos', null, 'create');

        $validator
            ->scalar('tipo_cultivo')
            ->maxLength('tipo_cultivo', 45)
            ->requirePresence('tipo_cultivo', 'create')
            ->notEmptyString('tipo_cultivo');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 45)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDate('fecha');

        $validator
            ->scalar('pez')
            ->maxLength('pez', 45)
            ->allowEmptyString('pez');

        $validator
            ->integer('cantidad_pez')
            ->allowEmptyString('cantidad_pez');

        $validator
            ->scalar('planta')
            ->maxLength('planta', 45)
            ->requirePresence('planta', 'create')
            ->notEmptyString('planta');

        $validator
            ->integer('cantidad_planta')
            ->requirePresence('cantidad_planta', 'create')
            ->notEmptyString('cantidad_planta');

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
        $rules->add($rules->existsIn(['usuario_id'], 'Usuarios'), ['errorField' => 'usuario_id']);

        return $rules;
    }
}
