<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cultivo $cultivo
 */
session_start();
?>
<div class="container">
    <center>
        <p class="h1 mb-2">Vista de cultivo</p>
        <table class="table" style="width: 40%">
            <tr>
                <th><?= __('Id cultvo') ?></th>
                <td><?= h($cultivo->id_cultivos) ?></td>
            </tr>
            <tr>
                <th><?= __('Tipo Cultivo') ?></th>
                <td><?= h($cultivo->tipo_cultivo) ?></td>
            </tr>
            <tr>
                <th><?= __('Nombre') ?></th>
                <td><?= h($cultivo->nombre) ?></td>
            </tr>
            <?php if ($cultivo->tipo_cultivo != 'Tierra') {
            ?>
                <tr>
                    <th><?= __('Pez') ?></th>
                    <td><?= h($cultivo->pez) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantidad Pez') ?></th>
                    <td><?= $this->Number->format($cultivo->cantidad_pez) ?></td>
                </tr>
            <?php } ?>
            <tr>
                <th><?= __('Planta') ?></th>
                <td><?= h($cultivo->planta) ?></td>
            </tr>
            <tr>
                <th><?= __('Id Cultivos') ?></th>
                <td><?= $this->Number->format($cultivo->id_cultivos) ?></td>
            </tr>

            <tr>
                <th><?= __('Cantidad Planta') ?></th>
                <td><?= $this->Number->format($cultivo->cantidad_planta) ?></td>
            </tr>
            <tr>
                <th><?= __('Fecha') ?></th>
                <td><?= h($cultivo->fecha) ?></td>
            </tr>
        </table>
        <div class="mb-2">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Editar cultivo '), ['action' => 'edit', $cultivo->id_cultivos], ['class' => 'btn btn-success']) ?>&nbsp;
            <?= $this->Form->postLink(__('Eliminar cultivo '), ['action' => 'delete', $cultivo->id_cultivos], ['confirm' => __('Are you sure you want to delete # {0}?', $cultivo->id_cultivos), 'class' => 'btn btn-success']) ?>&nbsp;
            <?= $this->Html->link(__('Volver a lista '), ['action' => 'index'], ['class' => 'btn btn-success']) ?>&nbsp;
            <?= $this->Html->link(__('Agregar nuevo cultivo'), ['action' => 'add'], ['class' => 'btn btn-success']) ?>
        </div>
    </center>
</div>