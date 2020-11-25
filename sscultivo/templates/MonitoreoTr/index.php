<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonitoreoTr[]|\Cake\Collection\CollectionInterface $monitoreoTr
 */
?>
<div class="container">
    <br>
    <center>
        <p class="h1 mb-2">Lista de monitoreo TR</p>
        <?= $this->Html->link(__('Nuevo monitoreo TR'), ['action' => 'add'], ['class' => 'btn btn-primary offset-md-8 h1 mb-2']) ?>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('idmonitoreo_TR', ['value' => 'Id']) ?></th>
                        <th><?= $this->Paginator->sort('fecha_TR', ['value' => 'Fecha']) ?></th>
                        <th><?= $this->Paginator->sort('ph') ?></th>
                        <th><?= $this->Paginator->sort('humedad') ?></th>
                        <th><?= $this->Paginator->sort('nitrogeno') ?></th>
                        <th><?= $this->Paginator->sort('fosforo') ?></th>
                        <th><?= $this->Paginator->sort('potasio') ?></th>
                        <th><?= $this->Paginator->sort('dioxidoCB') ?></th>
                        <th><?= $this->Paginator->sort('comentario') ?></th>
                        <th><?= $this->Paginator->sort('cultivos_id1', ['value' => 'Cl. Id']) ?></th>
                        <th class="actions"><?= __('Acciones') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($monitoreoTr as $monitoreoTr) : ?>
                        <tr>
                            <td><?= $this->Number->format($monitoreoTr->idmonitoreo_TR) ?></td>
                            <td><?= h($monitoreoTr->fecha_TR) ?></td>
                            <td><?= h($monitoreoTr->ph) ?></td>
                            <td><?= $this->Number->format($monitoreoTr->humedad) ?></td>
                            <td><?= h($monitoreoTr->nitrogeno) ?></td>
                            <td><?= h($monitoreoTr->fosforo) ?></td>
                            <td><?= h($monitoreoTr->potasio) ?></td>
                            <td><?= h($monitoreoTr->dioxidoCB) ?></td>
                            <td><?= h($monitoreoTr->comentario) ?></td>
                            <td>
                                <?= $monitoreoTr->has('cultivo') ? $this->Html->link($monitoreoTr->cultivos_id1 . " " . $monitoreoTr->cultivo->nombre, ['controller' => 'Cultivos', 'action' => 'view', $monitoreoTr->cultivos_id1]) : '' ?></td>
                            </td>
                            <td class="actions">
                                <?= $this->Html->link(__('<i class="fa fa-eye" style="font-size:15px"></i>'), ['action' => 'view', $monitoreoTr->idmonitoreo_TR], ['escape' => false, 'class' => 'btn btn-success', 'title' => 'Ver Monitoreo']) ?>
                                <?= $this->Html->link(__('<i class="fas fa-pencil-alt" style="font-size:15px"></i>'), ['action' => 'edit', $monitoreoTr->idmonitoreo_TR], ['escape' => false, 'class' => 'btn btn-info', 'title' => 'Editar Monitoreo']) ?>
                                <?= $this->Form->postLink(__('<i class="fa fa-trash" style="font-size:15px"></i>'), ['action' => 'delete', $monitoreoTr->idmonitoreo_TR], ['escape' => false, 'class' => 'btn btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $monitoreoTr->idmonitoreo_TR)]) ?>
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