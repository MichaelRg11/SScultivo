<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cultivo $cultivo
 */
session_start();
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cultivo->id_cultivos],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cultivo->id_cultivos), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cultivos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cultivos form content">
            <?= $this->Form->create($cultivo) ?>
            <fieldset>
                <legend><?= __('Edit Cultivo') ?></legend>
                <?php
                    echo $this->Form->control('tipo_cultivo');
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('pez');
                    echo $this->Form->control('cantidad_pez');
                    echo $this->Form->control('planta');
                    echo $this->Form->control('cantidad_planta');
                    echo $this->Form->control('usuario_id', ['options' => $usuarios]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
