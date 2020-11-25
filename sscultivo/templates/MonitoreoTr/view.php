<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonitoreoTr $monitoreoTr
 */
session_start();
?>
<div class="container">
    <center>
        <p class="h1 mb-2">Vista de monitoreo de tierra</p>
        <table class="table" style="width: 40%">
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
            <tr>
                <th><?= __('Comentario') ?></th>
                <td><?= h($monitoreoTr->comentario) ?></td>
            </tr>
        </table>
        <div class="mb-2">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Editar monitoreo Tr'), ['action' => 'edit', $monitoreoTr->idmonitoreo_TR], ['class' => 'btn btn-success']) ?>
            <?= $this->Form->postLink(__('Eliminar monitoreo Tr'), ['action' => 'delete', $monitoreoTr->idmonitoreo_TR], ['confirm' => __('Are you sure you want to delete # {0}?', $monitoreoTr->idmonitoreo_TR), 'class' => 'btn btn-success']) ?>
            <?= $this->Html->link(__('Lista de monitoreo Tr'), ['action' => 'index'], ['class' => 'btn btn-success']) ?>
            <?= $this->Html->link(__('Nuevo monitoreo TR'), ['action' => 'add'], ['class' => 'btn btn-success']) ?>
        </div>
    </center>
</div>