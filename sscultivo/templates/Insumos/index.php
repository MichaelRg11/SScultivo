<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Insumo[]|\Cake\Collection\CollectionInterface $insumos
 */
session_start();
?>
<div class="insumos index content">
    <?= $this->Html->link(__('New Insumo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Insumos') ?></h3>
    <div class="table-responsive">
        <table>
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
                <?php foreach ($insumos as $insumo): ?>
                <tr>
                    <td><?= $this->Number->format($insumo->id_insumos) ?></td>
                    <td><?= h($insumo->nombre) ?></td>
                    <td><?= $this->Number->format($insumo->precio_unitario) ?></td>
                    <td><?= $this->Number->format($insumo->precio_total) ?></td>
                    <td><?= $insumo->has('cultivo') ? $this->Html->link($insumo->cultivo->id_cultivos, ['controller' => 'Cultivos', 'action' => 'view', $insumo->cultivo->id_cultivos]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $insumo->id_insumos]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $insumo->id_insumos]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $insumo->id_insumos], ['confirm' => __('Are you sure you want to delete # {0}?', $insumo->id_insumos)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
