<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonitoreoAc[]|\Cake\Collection\CollectionInterface $monitoreoAc
 */
?>
<div class="">
    <br>
    <center>
        <p class="h1 mb-2">Lista de monitoreo AC</p>
        <?= $this->Html->link(__('<i class="fas fa-plus" style="font-size:15px"> Agregar monitoreo acuaponico</i>'), ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-primary offset-md-8 h1 mb-2']) ?>
        <br>
        <a> <?= $this->Html->link(__('Ejemplo Grafica'), ['controller' => 'Reportes', 'action' => 'ejemplo'], ['class' => 'dropdown-item']) ?></a>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('idmonitoreo_AC', ['value' => 'Id']) ?></th>
                        <th><?= $this->Paginator->sort('fecha_AC', ['value' => 'Fecha']) ?></th>
                        <th><?= $this->Paginator->sort('temperatura') ?></th>
                        <th><?= $this->Paginator->sort('nitrogeno') ?></th>
                        <th><?= $this->Paginator->sort('nitritos') ?></th>
                        <th><?= $this->Paginator->sort('oxigeno_disuelto', ['value' => 'O. Disuelto']) ?></th>
                        <th><?= $this->Paginator->sort('proteina_alimento', ['value' => 'Alimento']) ?></th>
                        <th><?= $this->Paginator->sort('ph') ?></th>
                        <th><?= $this->Paginator->sort('tiempo_crecimiento', ['value' => 'T. crecimiento']) ?></th>
                        <th><?= $this->Paginator->sort('exposicion_solar', ['value' => 'Ex. Sol']) ?></th>
                        <th><?= $this->Paginator->sort('comentario') ?></th>
                        <th><?= $this->Paginator->sort('cultivos_id2', ['value' => 'Cl. Id']) ?></th>
                        <th class="actions"><?= __('Acciones') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($monitoreoAc as $monitoreoAc) : ?>
                        <tr>
                            <td><?= $this->Number->format($monitoreoAc->idmonitoreo_AC) ?></td>
                            <td><?= h($monitoreoAc->fecha_AC) ?></td>
                            <td><?= h($monitoreoAc->temperatura) ?></td>
                            <td><?= h($monitoreoAc->nitrogeno) ?></td>
                            <td><?= h($monitoreoAc->nitritos) ?></td>
                            <td><?= h($monitoreoAc->oxigeno_disuelto) ?></td>
                            <td><?= h($monitoreoAc->proteina_alimento) ?></td>
                            <td><?= h($monitoreoAc->ph) ?></td>
                            <td><?= h($monitoreoAc->tiempo_crecimiento) ?></td>
                            <td><?= h($monitoreoAc->exposicion_solar) ?></td>
                            <td><?= h($monitoreoAc->comentario) ?></td>
                            <td>
                                <?= $monitoreoAc->has('cultivo') ? $this->Html->link($monitoreoAc->cultivos_id2 . " " . $monitoreoAc->cultivo->nombre, ['controller' => 'Cultivos', 'action' => 'view', $monitoreoAc->cultivos_id2]) : '' ?></td>
                            </td>
                            <td class="actions">
                                <?= $this->Html->link(__('<i class="fa fa-eye" style="font-size:15px"></i>'), ['action' => 'view', $monitoreoAc->idmonitoreo_AC], ['escape' => false, 'class' => 'btn btn-success', 'title' => 'Ver Monitoreo']) ?>
                                <?= $this->Html->link(__('<i class="fas fa-pencil-alt" style="font-size:15px"></i>'), ['action' => 'edit', $monitoreoAc->idmonitoreo_AC], ['escape' => false, 'class' => 'btn btn-info', 'title' => 'Editar Monitoreo']) ?>
                                <?= $this->Form->postLink(__('<i class="fa fa-trash" style="font-size:15px"></i>'), ['action' => 'delete', $monitoreoAc->idmonitoreo_AC], ['escape' => false, 'class' => 'btn btn-danger', 'title' => 'Eliminar Monitoreo', 'confirm' => __('Are you sure you want to delete # {0}?', $monitoreoAc->idmonitoreo_AC)]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="paginator container">
            <div class="row align-items-start">
                <div class="col">
                    <?= $this->Paginator->first('<< ' . __('first')) ?>
                </div>
                <div class="col">
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                </div>
                <div class="col">
                    <?= $this->Paginator->numbers() ?>
                </div>
                <div class="col">
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                </div>
                <div class="col">
                    <?= $this->Paginator->last(__('last') . ' >>') ?>
                </div>
            </div>
            <p><?= $this->Paginator->counter(__('Pagina {{page}} de {{pages}}, Cargados {{current}} Registros de {{count}} en total')) ?></p>
        </div>
    </center>
</div>