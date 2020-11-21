<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MonitoreoTrFixture
 */
class MonitoreoTrFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'monitoreo_tr';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'idmonitoreo_TR' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'fecha_TR' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'ph' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'humedad' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nitrogeno' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'fosforo' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'potasio' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'dioxidoCB' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'comentario' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'cultivos_id1' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_monitoreo_TR_cultivos1_idx' => ['type' => 'index', 'columns' => ['cultivos_id1'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idmonitoreo_TR'], 'length' => []],
            'fk_monitoreo_TR_cultivos1' => ['type' => 'foreign', 'columns' => ['cultivos_id1'], 'references' => ['cultivos', 'id_cultivos'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'idmonitoreo_TR' => 1,
                'fecha_TR' => '2020-11-15',
                'ph' => 'Lorem ipsum dolor sit amet',
                'humedad' => 1,
                'nitrogeno' => 'Lorem ipsum dolor sit amet',
                'fosforo' => 'Lorem ipsum dolor sit amet',
                'potasio' => 'Lorem ipsum dolor sit amet',
                'dioxidoCB' => 'Lorem ipsum dolor sit amet',
                'comentario' => 'Lorem ipsum dolor sit amet',
                'cultivos_id1' => 1,
            ],
        ];
        parent::init();
    }
}
