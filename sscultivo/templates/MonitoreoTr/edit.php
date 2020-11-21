<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonitoreoTr $monitoreoTr
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $monitoreoTr->idmonitoreo_TR],
                ['confirm' => __('Are you sure you want to delete # {0}?', $monitoreoTr->idmonitoreo_TR), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Monitoreo Tr'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="monitoreoTr form content">
            <?= $this->Form->create($monitoreoTr) ?>
            <fieldset>
                <legend><?= __('Edit Monitoreo Tr') ?></legend>
                <?php
                    echo $this->Form->control('fecha_TR');
                    echo $this->Form->control('ph');
                    echo $this->Form->control('humedad');
                    echo $this->Form->control('nitrogeno');
                    echo $this->Form->control('fosforo');
                    echo $this->Form->control('potasio');
                    echo $this->Form->control('dioxidoCB');
                    echo $this->Form->control('comentario');
                    echo $this->Form->control('cultivos_id1');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
