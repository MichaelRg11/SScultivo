<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonitoreoAc $monitoreoAc
 */
session_start();
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Monitoreo Ac'), ['action' => 'edit', $monitoreoAc->idmonitoreo_AC], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Monitoreo Ac'), ['action' => 'delete', $monitoreoAc->idmonitoreo_AC], ['confirm' => __('Are you sure you want to delete # {0}?', $monitoreoAc->idmonitoreo_AC), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Monitoreo Ac'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Monitoreo Ac'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="monitoreoAc view content">
            <h3><?= h($monitoreoAc->idmonitoreo_AC) ?></h3>
            <table>
                <tr>
                    <th><?= __('Temperatura') ?></th>
                    <td><?= h($monitoreoAc->temperatura) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nitrogeno') ?></th>
                    <td><?= h($monitoreoAc->nitrogeno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nitritos') ?></th>
                    <td><?= h($monitoreoAc->nitritos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Oxigeno Disuelto') ?></th>
                    <td><?= h($monitoreoAc->oxigeno_disuelto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Proteina Alimento') ?></th>
                    <td><?= h($monitoreoAc->proteina_alimento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ph') ?></th>
                    <td><?= h($monitoreoAc->ph) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tiempo Crecimiento') ?></th>
                    <td><?= h($monitoreoAc->tiempo_crecimiento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exposicion Solar') ?></th>
                    <td><?= h($monitoreoAc->exposicion_solar) ?></td>
                </tr>
                <tr>
                    <th><?= __('Comentario') ?></th>
                    <td><?= h($monitoreoAc->comentario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idmonitoreo AC') ?></th>
                    <td><?= $this->Number->format($monitoreoAc->idmonitoreo_AC) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cultivos Id2') ?></th>
                    <td><?= $this->Number->format($monitoreoAc->cultivos_id2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha AC') ?></th>
                    <td><?= h($monitoreoAc->fecha_AC) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
