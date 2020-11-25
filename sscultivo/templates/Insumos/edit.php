<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Insumo $insumo
 */
session_start();
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $insumo->id_insumos],
                ['confirm' => __('Are you sure you want to delete # {0}?', $insumo->id_insumos), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Insumos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="insumos form content">
            <?= $this->Form->create($insumo) ?>
            <fieldset>
                <legend><?= __('Edit Insumo') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('precio_unitario');
                    echo $this->Form->control('precio_total');
                    echo $this->Form->control('cultivos_id', ['options' => $cultivos]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
