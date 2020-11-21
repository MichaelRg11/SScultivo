<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MonitoreoTr Entity
 *
 * @property int $idmonitoreo_TR
 * @property \Cake\I18n\FrozenDate $fecha_TR
 * @property string $ph
 * @property int $humedad
 * @property string $nitrogeno
 * @property string $fosforo
 * @property string $potasio
 * @property string $dioxidoCB
 * @property string $comentario
 * @property int $cultivos_id1
 */
class MonitoreoTr extends Entity
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
        'fecha_TR' => true,
        'ph' => true,
        'humedad' => true,
        'nitrogeno' => true,
        'fosforo' => true,
        'potasio' => true,
        'dioxidoCB' => true,
        'comentario' => true,
        'cultivos_id1' => true,
    ];
}
