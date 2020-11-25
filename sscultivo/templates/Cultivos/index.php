<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cultivo[]|\Cake\Collection\CollectionInterface $cultivos
 */
session_start();
?>
<div class="container">
    <center>
        <p class="h1 mb-2">Lista de cultivos</p>
        <?= $this->Html->link(__('Nuevo cultivo'), ['action' => 'add'], ['class' => 'btn btn-primary offset-md-8 h1 mb-2']) ?>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id_cultivos') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('tipo_cultivo') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('pez') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('cantidad_pez') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('planta') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('cantidad_planta') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cultivos as $cultivo) : ?>
                        <tr>
                            <td scope="row"><?= $this->Number->format($cultivo->id_cultivos) ?></td>
                            <td><?= h($cultivo->tipo_cultivo) ?></td>
                            <td><?= h($cultivo->nombre) ?></td>
                            <td><?= h($cultivo->fecha) ?></td>
                            <td><?= h($cultivo->pez) ?></td>
                            <td><?= $this->Number->format($cultivo->cantidad_pez) ?></td>
                            <td><?= h($cultivo->planta) ?></td>
                            <td><?= $this->Number->format($cultivo->cantidad_planta) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('<i class="fa fa-eye" style="font-size:15px"></i>'), ['action' => 'view', $cultivo->id_cultivos], ['escape' => false, 'class' => 'btn btn-success', 'title' => 'Ver Cultivo']) ?>
                                <?= $this->Html->link(__('<i class="fas fa-pencil-alt" style="font-size:15px"></i>'), ['action' => 'edit', $cultivo->id_cultivos], ['escape' => false, 'class' => 'btn btn-info', 'title' => 'Editar Cultivo']) ?>
                                <?= $this->Form->postLink(__('<i class="fa fa-trash" style="font-size:15px"></i>'), ['action' => 'delete', $cultivo->id_cultivos], ['confirm' => __('Estás seguro de que quieres eliminar el # {0}?', $cultivo->id), 'escape' => false, 'class' => 'btn btn-danger', 'title' => 'Eliminar Cliente']) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="paginator container">
            <div class="row align-items-start">
                <div class="col">
                    <?= $this->Paginator->first('<< ' . __('first')) ?>
                </div>
                <div class="col">
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                </div>
                <div class="col">
                    <?= $this->Paginator->numbers() ?>
                </div>
                <div class="col">
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                </div>
                <div class="col">
                    <?= $this->Paginator->last(__('last') . ' >>') ?>
                </div>
            </div>
            <p><?= $this->Paginator->counter(__('Pagina {{page}} de {{pages}}, Cargados {{current}} Registros de {{count}} en total')) ?></p>
        </div>
    </center>
</div>