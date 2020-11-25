<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Insumo $insumo
 */
session_start();
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Insumo'), ['action' => 'edit', $insumo->id_insumos], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Insumo'), ['action' => 'delete', $insumo->id_insumos], ['confirm' => __('Are you sure you want to delete # {0}?', $insumo->id_insumos), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Insumos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Insumo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="insumos view content">
            <h3><?= h($insumo->id_insumos) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($insumo->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cultivo') ?></th>
                    <td><?= $insumo->has('cultivo') ? $this->Html->link($insumo->cultivo->id_cultivos, ['controller' => 'Cultivos', 'action' => 'view', $insumo->cultivo->id_cultivos]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Insumos') ?></th>
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
        </div>
    </div>
</div>
