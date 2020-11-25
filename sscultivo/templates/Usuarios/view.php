<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
session_start();
?>
<div class="container">
    <center>
        <br>
        <p class="h2 mb-2">Informacion personal</p>
        <div class="column-responsive column-80">
            <div class="usuarios view content">
                <table class="table mb-4" style="width: 30%;">
                    <tr>
                        <th><?= __('CC') ?></th>
                        <td><?= h($usuario->CC) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Nombre') ?></th>
                        <td><?= h($usuario->nombre) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Apellidos') ?></th>
                        <td><?= h($usuario->apellidos) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Email') ?></th>
                        <td><?= h($usuario->email) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Contraseña') ?></th>
                        <td><?= h($usuario->contraseña) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Id Usuario') ?></th>
                        <td><?= $this->Number->format($usuario->id_usuario) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Edad') ?></th>
                        <td><?= $this->Number->format($usuario->edad) ?></td>
                    </tr>
                </table>
                <h4 class="mb-2">Cultivos registrados</h4>
                <?php if (!empty($usuario->cultivos)) : ?>
                    <div class="table-responsive">
                        <table class="table" style="width: 90%;">
                            <tr>
                                <th><?= __('Id Cultivos') ?></th>
                                <th><?= __('Tipo Cultivo') ?></th>
                                <th><?= __('Nombre') ?></th>
                                <th><?= __('Fecha') ?></th>
                                <th><?= __('Pez') ?></th>
                                <th><?= __('Cantidad Pez') ?></th>
                                <th><?= __('Planta') ?></th>
                                <th><?= __('Cantidad Planta') ?></th>
                                <th>Acciones</th>
                            </tr>
                            <?php foreach ($usuario->cultivos as $cultivos) : ?>
                                <tr>
                                    <td><?= h($cultivos->id_cultivos) ?></td>
                                    <td><?= h($cultivos->tipo_cultivo) ?></td>
                                    <td><?= h($cultivos->nombre) ?></td>
                                    <td><?= h($cultivos->fecha) ?></td>
                                    <td><?= h($cultivos->pez) ?></td>
                                    <td><?= h($cultivos->cantidad_pez) ?></td>
                                    <td><?= h($cultivos->planta) ?></td>
                                    <td><?= h($cultivos->cantidad_planta) ?></td>
                                    <td>
                                        <center>
                                            <?= $this->Html->link(__('<i class="fa fa-eye" style="font-size:15px"></i>'), ['action' => 'view', $cultivos->id_cultivos], ['escape' => false, 'class' => 'btn btn-success', 'title' => 'Ver Cultivo']) ?>
                                        </center>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </center>
</div>