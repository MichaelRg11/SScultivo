<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonitoreoAc $monitoreoAc
 */
session_start();
?>
<div class="container">
    <center>
        <?= $this->Form->create($monitoreoAc) ?>
        <fieldset style="width: 80%;">
            <p class="h1 mb-2">Editar monitoreo acuaponiico</p>
            <?= $this->Form->control('fecha_AC', ['id' => 'fecha_AC', 'name' => 'fecha_AC', 'type' => 'date', 'placeholder' => 'Fecha de creacion del insumo', 'class' => 'form-control']); ?>
            <div class="form-row">
                <div class=" col">
                    <?= $this->Form->control('temperatura', ['id' => 'temperatura', 'name' => 'temperatura', 'placeholder' => 'Temperatura del cultivo', 'class' => 'form-control']); ?>
                </div>
                <div class="col">
                    <?= $this->Form->control('nitrogeno', ['id' => 'nitrogeno', 'name' => 'nitrogeno', 'placeholder' => 'Cantidad de nitrogeno del cultivo', 'class' => 'form-control']); ?>
                </div>
            </div>
            <div class="form-row">
                <div class=" col">
                    <?= $this->Form->control('nitritos', ['id' => 'nitritos', 'name' => 'nitritos', 'placeholder' => 'Cantidad de nitritos del cultivo', 'class' => 'form-control']); ?>
                </div>
                <div class="col">
                    <?= $this->Form->control('oxigeno_disuelto', ['id' => 'oxigeno_disuelto', 'name' => 'oxigeno_disuelto', 'placeholder' => 'Cantidad de oxigeno disuelto del cultivo', 'class' => 'form-control']); ?>
                </div>
            </div>
            <div class="form-row">
                <div class=" col">
                    <?= $this->Form->control('proteina_alimento', ['id' => 'proteina_alimento', 'name' => 'proteina_alimento', 'placeholder' => 'Cantidad de proteina alimento del cultivo', 'class' => 'form-control']); ?>
                </div>
                <div class="col">
                    <?= $this->Form->control('ph', ['id' => 'ph', 'name' => 'ph', 'placeholder' => 'Cantidad de ph del cultivo', 'class' => 'form-control']); ?>
                </div>
            </div>
            <div class="form-row">
                <div class=" col">
                    <?= $this->Form->control('tiempo_crecimiento', ['id' => 'tiempo_crecimiento', 'name' => 'tiempo_crecimiento', 'placeholder' => 'Cantidad de tiempo crecimiento del cultivo', 'class' => 'form-control']); ?>
                </div>
                <div class="col">
                    <?= $this->Form->control('exposicion_solar', ['id' => 'exposicion_solar', 'name' => 'exposicion_solar', 'placeholder' => 'Cantidad de exposicion solar del cultivo', 'class' => 'form-control']); ?>
                </div>
            </div>
            <?= $this->Form->control('comentario', ['id' => 'comentario', 'name' => 'comentario', 'placeholder' => 'Comentarios respecto al cultivo', 'class' => 'form-control mb-2']); ?>
        </fieldset>
        <div class="form-row mb-2">
            <div class="col mb-2">
                <?= $this->Form->button('Guardar monitoreo', ['class' => 'btn btn-success']) ?>
                <?= $this->Form->postLink(
                    __('Delete'),
                    ['action' => 'delete', $monitoreoAc->idmonitoreo_AC],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $monitoreoAc->idmonitoreo_AC), 'class' => 'btn btn-success']
                ) ?>
                <?= $this->Html->link(__('List Monitoreo Ac'), ['action' => 'index'], ['class' => 'btn btn-success']) ?>
            </div>
        </div>
        <?= $this->Form->end() ?>
    </center>
</div>