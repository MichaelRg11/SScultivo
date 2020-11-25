<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonitoreoTr $monitoreoTr
 */
session_start();
?>
<div class="container">
    <center>
        <p class="h1 mb-2">Editar monitorreo de tierra</p>
        <?= $this->Form->create($monitoreoTr) ?>
        <fieldset style="width: 80%;">
            <div class="form-row">
                <div class=" col">
                    <?= $this->Form->control('fecha_TR', ['id' => 'fecha_TR', 'name' => 'fecha_TR', 'type' => 'date', 'class' => 'form-control']); ?>
                </div>
            </div>
            <div class="form-row">
                <div class=" col">
                    <?= $this->Form->control('ph', ['id' => 'ph', 'name' => 'ph', 'placeholder' => 'Cantidad de ph del cultivo', 'class' => 'form-control']); ?>
                </div>
                <div class="col">
                    <?= $this->Form->control('humedad', ['type' => 'number', 'id' => 'humedad', 'name' => 'humedad', 'min' => '1', 'placeholder' => 'Porcentaje de humedad del cultivo', 'class' => 'form-control']); ?>
                </div>
            </div>
            <div class="form-row">
                <div class=" col">
                    <?= $this->Form->control('nitrogeno', ['id' => 'nitrogeno', 'name' => 'nitrogeno', 'placeholder' => 'Cantidad de nitrito del cultivo', 'class' => 'form-control']); ?>
                </div>
                <div class="col">
                    <?= $this->Form->control('fosforo', ['id' => 'fosforo', 'name' => 'fosforo', 'placeholder' => 'Cantidad de fosforo del cultivo', 'class' => 'form-control']); ?>
                </div>
            </div>
            <div class="form-row">
                <div class=" col">
                    <?= $this->Form->control('potasio', ['id' => 'potasio', 'name' => 'potasio', 'placeholder' => 'Cantidad de potasio del cultivo', 'class' => 'form-control']); ?>
                </div>
                <div class="col">
                    <?= $this->Form->control('dioxidoCB', ['id' => 'dioxidoCB', 'name' => 'dioxidoCB', 'placeholder' => 'Cantidad de dioxidoCB del cultivo', 'class' => 'form-control']); ?>
                </div>
            </div>
            <?= $this->Form->control('comentario', ['id' => 'comentario', 'name' => 'comentario', 'placeholder' => 'Comentario con respecto al cultivo', 'class' => 'form-control mb-2']); ?>
        </fieldset>
        <div class="form-row mb-2">
            <div class="col mb-2">
                <?= $this->Form->button('Guardar cultivo', ['class' => 'btn btn-success']) ?>
                <?= $this->Form->postLink(
                    __('Delete'),
                    ['action' => 'delete', $monitoreoTr->idmonitoreo_TR],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $monitoreoTr->idmonitoreo_TR), 'class' => 'btn btn-success']
                ) ?>
                <?= $this->Html->link(__('List Monitoreo Tr'), ['action' => 'index'], ['class' => 'btn btn-success']) ?>
            </div>
        </div>
        <?= $this->Form->end() ?>
    </center>
</div>