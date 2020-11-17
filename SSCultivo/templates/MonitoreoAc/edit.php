<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonitoreoAc $monitoreoAc
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $monitoreoAc->idmonitoreo_AC],
                ['confirm' => __('Are you sure you want to delete # {0}?', $monitoreoAc->idmonitoreo_AC), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Monitoreo Ac'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="monitoreoAc form content">
            <?= $this->Form->create($monitoreoAc) ?>
            <fieldset>
                <legend><?= __('Edit Monitoreo Ac') ?></legend>
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
