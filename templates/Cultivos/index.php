<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cultivo[]|\Cake\Collection\CollectionInterface $cultivos
 */
?>
<div class="cultivos index content">
    <?= $this->Html->link(__('New Cultivo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cultivos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_cultivos') ?></th>
                    <th><?= $this->Paginator->sort('tipo_cultivo') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('pez') ?></th>
                    <th><?= $this->Paginator->sort('cantidad_pez') ?></th>
                    <th><?= $this->Paginator->sort('planta') ?></th>
                    <th><?= $this->Paginator->sort('cantidad_planta') ?></th>
                    <th><?= $this->Paginator->sort('usuario_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cultivos as $cultivo): ?>
                <tr>
                    <td><?= $this->Number->format($cultivo->id_cultivos) ?></td>
                    <td><?= h($cultivo->tipo_cultivo) ?></td>
                    <td><?= h($cultivo->nombre) ?></td>
                    <td><?= h($cultivo->fecha) ?></td>
                    <td><?= h($cultivo->pez) ?></td>
                    <td><?= $this->Number->format($cultivo->cantidad_pez) ?></td>
                    <td><?= h($cultivo->planta) ?></td>
                    <td><?= $this->Number->format($cultivo->cantidad_planta) ?></td>
                    <td><?= $cultivo->has('usuario') ? $this->Html->link($cultivo->usuario->id_usuario, ['controller' => 'Usuarios', 'action' => 'view', $cultivo->usuario->id_usuario]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cultivo->id_cultivos]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cultivo->id_cultivos]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cultivo->id_cultivos], ['confirm' => __('Are you sure you want to delete # {0}?', $cultivo->id_cultivos)]) ?>
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
