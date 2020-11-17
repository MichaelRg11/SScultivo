<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonitoreoAc[]|\Cake\Collection\CollectionInterface $monitoreoAc
 */
?>
<div class="monitoreoAc index content">
    <?= $this->Html->link(__('New Monitoreo Ac'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Monitoreo Ac') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idmonitoreo_AC') ?></th>
                    <th><?= $this->Paginator->sort('fecha_AC') ?></th>
                    <th><?= $this->Paginator->sort('temperatura') ?></th>
                    <th><?= $this->Paginator->sort('nitrogeno') ?></th>
                    <th><?= $this->Paginator->sort('nitritos') ?></th>
                    <th><?= $this->Paginator->sort('oxigeno_disuelto') ?></th>
                    <th><?= $this->Paginator->sort('proteina_alimento') ?></th>
                    <th><?= $this->Paginator->sort('ph') ?></th>
                    <th><?= $this->Paginator->sort('tiempo_crecimiento') ?></th>
                    <th><?= $this->Paginator->sort('exposicion_solar') ?></th>
                    <th><?= $this->Paginator->sort('comentario') ?></th>
                    <th><?= $this->Paginator->sort('cultivos_id2') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($monitoreoAc as $monitoreoAc): ?>
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
                    <td><?= $this->Number->format($monitoreoAc->cultivos_id2) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $monitoreoAc->idmonitoreo_AC]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $monitoreoAc->idmonitoreo_AC]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $monitoreoAc->idmonitoreo_AC], ['confirm' => __('Are you sure you want to delete # {0}?', $monitoreoAc->idmonitoreo_AC)]) ?>
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
