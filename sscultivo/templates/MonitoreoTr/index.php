<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonitoreoTr[]|\Cake\Collection\CollectionInterface $monitoreoTr
 */
?>
<div class="monitoreoTr index content">
    <?= $this->Html->link(__('New Monitoreo Tr'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Monitoreo Tr') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idmonitoreo_TR') ?></th>
                    <th><?= $this->Paginator->sort('fecha_TR') ?></th>
                    <th><?= $this->Paginator->sort('ph') ?></th>
                    <th><?= $this->Paginator->sort('humedad') ?></th>
                    <th><?= $this->Paginator->sort('nitrogeno') ?></th>
                    <th><?= $this->Paginator->sort('fosforo') ?></th>
                    <th><?= $this->Paginator->sort('potasio') ?></th>
                    <th><?= $this->Paginator->sort('dioxidoCB') ?></th>
                    <th><?= $this->Paginator->sort('comentario') ?></th>
                    <th><?= $this->Paginator->sort('cultivos_id1') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($monitoreoTr as $monitoreoTr): ?>
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
                    <td><?= $this->Number->format($monitoreoTr->cultivos_id1) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $monitoreoTr->idmonitoreo_TR]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $monitoreoTr->idmonitoreo_TR]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $monitoreoTr->idmonitoreo_TR], ['confirm' => __('Are you sure you want to delete # {0}?', $monitoreoTr->idmonitoreo_TR)]) ?>
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
