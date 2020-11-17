<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MonitoreoAcFixture
 */
class MonitoreoAcFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'monitoreo_ac';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'idmonitoreo_AC' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'fecha_AC' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'temperatura' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'nitrogeno' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'nitritos' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'oxigeno_disuelto' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'proteina_alimento' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'ph' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'tiempo_crecimiento' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'exposicion_solar' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'comentario' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'cultivos_id2' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_monitoreo_AC_cultivo_acuaponico1_idx' => ['type' => 'index', 'columns' => ['cultivos_id2'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idmonitoreo_AC'], 'length' => []],
            'fk_monitoreo_AC_cultivo_acuaponico1' => ['type' => 'foreign', 'columns' => ['cultivos_id2'], 'references' => ['cultivos', 'id_cultivos'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idmonitoreo_AC' => 1,
                'fecha_AC' => '2020-11-15',
                'temperatura' => 'Lorem ipsum dolor sit amet',
                'nitrogeno' => 'Lorem ipsum dolor sit amet',
                'nitritos' => 'Lorem ipsum dolor sit amet',
                'oxigeno_disuelto' => 'Lorem ipsum dolor sit amet',
                'proteina_alimento' => 'Lorem ipsum dolor sit amet',
                'ph' => 'Lorem ipsum dolor sit amet',
                'tiempo_crecimiento' => 'Lorem ipsum dolor sit amet',
                'exposicion_solar' => 'Lorem ipsum dolor sit amet',
                'comentario' => 'Lorem ipsum dolor sit amet',
                'cultivos_id2' => 1,
            ],
        ];
        parent::init();
    }
}
