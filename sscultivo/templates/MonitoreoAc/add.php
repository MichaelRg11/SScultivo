<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonitoreoAc $monitoreoAc
 */
session_start();
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Monitoreo Ac'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="monitoreoAc form content">
            <?= $this->Form->create($monitoreoAc) ?>
            <fieldset>
                <legend><?= __('Add Monitoreo Ac') ?></legend>
                <?php
                    echo $this->Form->control('fecha_AC');
                    echo $this->Form->control('temperatura');
                    echo $this->Form->control('nitrogeno');
                    echo $this->Form->control('nitritos');
                    echo $this->Form->control('oxigeno_disuelto');
                    echo $this->Form->control('proteina_alimento');
                    echo $this->Form->control('ph');
                    echo $this->Form->control('tiempo_crecimiento');
                    echo $this->Form->control('exposicion_solar');
                    echo $this->Form->control('comentario');
                    echo $this->Form->control('cultivos_id2');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
