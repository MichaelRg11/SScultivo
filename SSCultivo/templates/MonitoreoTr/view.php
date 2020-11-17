<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonitoreoTr $monitoreoTr
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Monitoreo Tr'), ['action' => 'edit', $monitoreoTr->idmonitoreo_TR], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Monitoreo Tr'), ['action' => 'delete', $monitoreoTr->idmonitoreo_TR], ['confirm' => __('Are you sure you want to delete # {0}?', $monitoreoTr->idmonitoreo_TR), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Monitoreo Tr'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Monitoreo Tr'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="monitoreoTr view content">
            <h3><?= h($monitoreoTr->idmonitoreo_TR) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ph') ?></th>
                    <td><?= h($monitoreoTr->ph) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nitrogeno') ?></th>
                    <td><?= h($monitoreoTr->nitrogeno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fosforo') ?></th>
                    <td><?= h($monitoreoTr->fosforo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Potasio') ?></th>
                    <td><?= h($monitoreoTr->potasio) ?></td>
                </tr>
                <tr>
                    <th><?= __('DioxidoCB') ?></th>
                    <td><?= h($monitoreoTr->dioxidoCB) ?></td>
                </tr>
                <tr>
                    <th><?= __('Comentario') ?></th>
                    <td><?= h($monitoreoTr->comentario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idmonitoreo TR') ?></th>
                    <td><?= $this->Number->format($monitoreoTr->idmonitoreo_TR) ?></td>
                </tr>
                <tr>
                    <th><?= __('Humedad') ?></th>
                    <td><?= $this->Number->format($monitoreoTr->humedad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cultivos Id1') ?></th>
                    <td><?= $this->Number->format($monitoreoTr->cultivos_id1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha TR') ?></th>
                    <td><?= h($monitoreoTr->fecha_TR) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
