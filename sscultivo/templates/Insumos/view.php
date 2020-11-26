<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Insumo $insumo
 */
session_start();
?>
<div class="container">
    <center>
    <p class="h1 mb-2">Vista de insumo</p>
            <table class="table" style="width: 40%">
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($insumo->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cultivo') ?></th>
                    <td><?= $insumo->has('cultivo') ? $this->Html->link($insumo->cultivo->id_cultivos, ['controller' => 'Cultivos', 'action' => 'view', $insumo->cultivo->id_cultivos]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Insumo') ?></th>
                    <td><?= $this->Number->format($insumo->id_insumos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio Unitario') ?></th>
                    <td><?= $this->Number->format($insumo->precio_unitario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio Total') ?></th>
                    <td><?= $this->Number->format($insumo->precio_total) ?></td>
                </tr>
            </table>
            <div class="mb-2">
                <h4 class="heading"><?= __('Acciones') ?></h4>
                <?= $this->Html->link(__('Edit Insumo'), ['action' => 'edit', $insumo->id_insumos], ['class' => 'btn btn-success']) ?>
                <?= $this->Form->postLink(__('Delete Insumo'), ['action' => 'delete', $insumo->id_insumos], ['confirm' => __('Are you sure you want to delete # {0}?', $insumo->id_insumos), 'class' => 'btn btn-success']) ?>
                <?= $this->Html->link(__('List Insumos'), ['action' => 'index'], ['class' => 'btn btn-success']) ?>
                <?= $this->Html->link(__('New Insumo'), ['action' => 'add'], ['class' => 'btn btn-success']) ?>
            </div>
    </center>
</div>