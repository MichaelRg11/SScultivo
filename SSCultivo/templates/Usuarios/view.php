<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id_usuario], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id_usuario], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id_usuario), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Usuario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuarios view content">
            <h3><?= h($usuario->id_usuario) ?></h3>
            <table>
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
            <div class="related">
                <h4><?= __('Related Cultivos') ?></h4>
                <?php if (!empty($usuario->cultivos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Cultivos') ?></th>
                            <th><?= __('Tipo Cultivo') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th><?= __('Pez') ?></th>
                            <th><?= __('Cantidad Pez') ?></th>
                            <th><?= __('Planta') ?></th>
                            <th><?= __('Cantidad Planta') ?></th>
                            <th><?= __('Usuario Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
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
                            <td><?= h($cultivos->usuario_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Cultivos', 'action' => 'view', $cultivos->id_cultivos]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Cultivos', 'action' => 'edit', $cultivos->id_cultivos]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cultivos', 'action' => 'delete', $cultivos->id_cultivos], ['confirm' => __('Are you sure you want to delete # {0}?', $cultivos->id_cultivos)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
