<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MonitoreoAc Entity
 *
 * @property int $idmonitoreo_AC
 * @property \Cake\I18n\FrozenDate $fecha_AC
 * @property string $temperatura
 * @property string $nitrogeno
 * @property string $nitritos
 * @property string $oxigeno_disuelto
 * @property string $proteina_alimento
 * @property string $ph
 * @property string $tiempo_crecimiento
 * @property string $exposicion_solar
 * @property string $comentario
 * @property int $cultivos_id2
 */
class MonitoreoAc extends Entity
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
        'fecha_AC' => true,
        'temperatura' => true,
        'nitrogeno' => true,
        'nitritos' => true,
        'oxigeno_disuelto' => true,
        'proteina_alimento' => true,
        'ph' => true,
        'tiempo_crecimiento' => true,
        'exposicion_solar' => true,
        'comentario' => true,
        'cultivos_id2' => true,
    ];
}
