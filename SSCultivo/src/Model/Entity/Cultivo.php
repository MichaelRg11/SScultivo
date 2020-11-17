<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cultivo Entity
 *
 * @property int $id_cultivos
 * @property string $tipo_cultivo
 * @property string $nombre
 * @property \Cake\I18n\FrozenDate $fecha
 * @property string|null $pez
 * @property int|null $cantidad_pez
 * @property string $planta
 * @property int $cantidad_planta
 * @property int $usuario_id
 *
 * @property \App\Model\Entity\Usuario $usuario
 */
class Cultivo extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'tipo_cultivo' => true,
        'nombre' => true,
        'fecha' => true,
        'pez' => true,
        'cantidad_pez' => true,
        'planta' => true,
        'cantidad_planta' => true,
        'usuario_id' => true,
        'usuario' => true,
    ];
}
