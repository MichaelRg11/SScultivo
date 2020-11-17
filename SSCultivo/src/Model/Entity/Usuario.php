<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id_usuario
 * @property string $CC
 * @property string $nombre
 * @property string $apellidos
 * @property int $edad
 * @property string $email
 * @property string $contraseña
 *
 * @property \App\Model\Entity\Cultivo[] $cultivos
 */
class Usuario extends Entity
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
        'CC' => true,
        'nombre' => true,
        'apellidos' => true,
        'edad' => true,
        'email' => true,
        'contraseña' => true,
        'cultivos' => true,
    ];
}
