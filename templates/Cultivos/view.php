<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cultivo $cultivo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cultivo'), ['action' => 'edit', $cultivo->id_cultivos], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cultivo'), ['action' => 'delete', $cultivo->id_cultivos], ['confirm' => __('Are you sure you want to delete # {0}?', $cultivo->id_cultivos), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cultivos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cultivo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cultivos view content">
            <h3><?= h($cultivo->id_cultivos) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tipo Cultivo') ?></th>
                    <td><?= h($cultivo->tipo_cultivo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($cultivo->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pez') ?></th>
                    <td><?= h($cultivo->pez) ?></td>
                </tr>
                <tr>
                    <th><?= __('Planta') ?></th>
                    <td><?= h($cultivo->planta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usuario') ?></th>
                    <td><?= $cultivo->has('usuario') ? $this->Html->link($cultivo->usuario->id_usuario, ['controller' => 'Usuarios', 'action' => 'view', $cultivo->usuario->id_usuario]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Cultivos') ?></th>
                    <td><?= $this->Number->format($cultivo->id_cultivos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantidad Pez') ?></th>
                    <td><?= $this->Number->format($cultivo->cantidad_pez) ?></td>
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
        </div>
    </div>
</div>
