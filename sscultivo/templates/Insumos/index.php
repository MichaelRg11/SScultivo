<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Insumo[]|\Cake\Collection\CollectionInterface $insumos
 */
?>
<div class="container">
    <center>
        <p class="h1 mb-2">Lista de insumos</p>
        <?= $this->Html->link(__('Nuevo insumo'), ['action' => 'add'], ['class' => 'btn btn-primary offset-md-8 h1 mb-2']) ?>
        <table class="table">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_insumos') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('precio_unitario') ?></th>
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
                        <td><?= $this->Number->format($insumo->precio_total) ?></td>
                        <td><?= $insumo->has('cultivo') ? $this->Html->link($insumo->cultivo->id_cultivos . " " . $insumo->cultivo->nombre, ['controller' => 'Cultivos', 'action' => 'view', $insumo->cultivo->id_cultivos]) : '' ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $insumo->id_insumos]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $insumo->id_insumos]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $insumo->id_insumos], ['confirm' => __('Are you sure you want to delete # {0}?', $insumo->id_insumos)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </center>
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
</div>