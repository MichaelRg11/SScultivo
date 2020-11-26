<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Insumo[]|\Cake\Collection\CollectionInterface $insumos
 */
?>
<div class="container">
    <center>
        <p class="h1 mb-2">Lista de insumos</p>
        <div class="paginator container mb-2">
            <div class="row align-items-start">
                <div class="col">
                <?= $this->Html->link(__('<i class="far fa-file-alt" style="font-size:15px"> Generar todos reporte de todos los insumos</i>'), ['controller' => 'Reportes', 'action' => 'insumosusuario', $_SESSION['id']], ['escape' => false, 'class' => 'btn btn-warning', 'title' => 'Ver Cultivo']) ?>
                </div>
                <div class="col">
                <?= $this->Html->link(__('<i class="far fa-file-alt" style="font-size:15px"> Generar reporte de insumos mayor a 1M</i>'), ['controller' => 'Reportes', 'action' => 'insumosmayores', $_SESSION['id']], ['escape' => false, 'class' => 'btn btn-dark', 'title' => 'Ver Cultivo']) ?>
                </div>
                <div class="col">
                <?= $this->Html->link(__('<i class="fas fa-plus" style="font-size:15px"> Agregar nuevo insumo</i>'), ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-primary']) ?>
                </div>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_insumos') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('precio_unitario') ?></th>
                    <th><?= $this->Paginator->sort('Cantidad') ?></th>
                    <th><?= $this->Paginator->sort('precio_total') ?></th>
                    <th><?= $this->Paginator->sort('cultivos_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($insumos as $insumo) : ?>
                    <tr>
                        <td><?= $this->Number->format($insumo->id_insumos) ?></td>
                        <td><?= h($insumo->nombre) ?></td>
                        <td><?= $this->Number->format($insumo->precio_unitario) ?></td>
                        <td><?= $insumo->precio_total / $insumo->precio_unitario ?></td>
                        <td><?= $this->Number->format($insumo->precio_total) ?></td>
                        <td><?= $insumo->has('cultivo') ? $this->Html->link($insumo->cultivo->id_cultivos . " " . $insumo->cultivo->nombre, ['controller' => 'Cultivos', 'action' => 'view', $insumo->cultivo->id_cultivos]) : '' ?></td>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-eye" style="font-size:15px"></i>'), ['action' => 'view',  $insumo->id_insumos], ['escape' => false, 'class' => 'btn btn-success', 'title' => 'Ver Monitoreo']) ?>
                            <?= $this->Html->link(__('<i class="fas fa-pencil-alt" style="font-size:15px"></i>'), ['action' => 'edit', $insumo->id_insumos], ['escape' => false, 'class' => 'btn btn-info', 'title' => 'Editar Monitoreo']) ?>
                            <?= $this->Form->postLink(__('<i class="fa fa-trash" style="font-size:15px"></i>'), ['action' => 'delete', $insumo->id_insumos], ['escape' => false, 'class' => 'btn btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $insumo->id_insumos)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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