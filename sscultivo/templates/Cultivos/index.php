<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cultivo[]|\Cake\Collection\CollectionInterface $cultivos
 */
?>
<div class="">
    <center>
        <div class="container">
            <p class="h1 mb-4">Lista de cultivos</p>
            
            <?= $this->Form->create() ?>
            <div class="form-row mb-4" id="datos">
                <div class="col">
                    <input type="date" id="fecha1" name="fecha1" class="form-control" onchange="">
                </div>
                <div class="col">
                    <input type="date" id="fecha2" name="fecha2" class="form-control" onchange="">
                </div>
                <div class="col">
                    <?= $this->Form->button('Generar PDF entre fechas', ['id' => 'btn', 'class' => 'btn btn-success', 'onchange', 'enviar();']) ?>
                </div>
                <?= $this->Form->end() ?>
                <div class="col">
                <?= $this->Html->link(__('<i class="fas fa-plus" style="font-size:15px"> Agregar nuevo cultivo</i>'), ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-primary']) ?>
                </div>
            </div>
        </div>
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
                                <?= $this->Html->link(__('<i class="far fa-file-alt" style="font-size:15px"></i>'), ['controller' => 'Reportes', 'action' => 'insumoscultivo', $cultivo->id_cultivos], ['escape' => false, 'class' => 'btn btn-warning', 'title' => 'PDF de los insumos del cultivo']) ?>
                                <?= $this->Html->link(__('<i class="far fa-file-alt" style="font-size:15px"></i>'), ['controller' => 'Reportes', 'action' => 'seguimientocultivo', $cultivo->id_cultivos], ['escape' => false, 'class' => 'btn btn-dark', 'title' => 'PDF de seguimiento de cultivo']) ?>
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