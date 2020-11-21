<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Insumo Entity
 *
 * @property int $id_insumos
 * @property string $nombre
 * @property float $precio_unitario
 * @property float $precio_total
 * @property int $cultivos_id
 *
 * @property \App\Model\Entity\Cultivo $cultivo
 */
class Insumo extends Entity
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
        'nombre' => true,
        'precio_unitario' => true,
        'precio_total' => true,
        'cultivos_id' => true,
        'cultivo' => true,
    ];
}
