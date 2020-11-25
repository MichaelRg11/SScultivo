<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonitoreoTr $monitoreoTr
 */
session_start();
$opcion = ['0' => 'Seleccionar cultivo'];
foreach ($cultivos as $cultivo) :
    if ($cultivo->tipo_cultivo == 'Tierra') {
        $opcion += [$cultivo->id_cultivos => $cultivo->id_cultivos . " " .  $cultivo->nombre];
    }
endforeach;
?>
<div class="container">
    <?= $this->Form->create($monitoreoTr, ['class' => 'text-center border border-light p-4']) ?>
    <center>
        <p class="h1 mb-2">Crear monitoreo de tierra</p>
        <div class="form-row">
            <div class="col">
                <?= $this->Form->control(' ', ['options' =>  $opcion, 'id' => 'cultivos_id1', 'name' => 'cultivos_id1', 'class' => 'form-control']); ?>
            </div>
            <div class=" col">
                <?= $this->Form->control(' ', ['id' => 'fecha_TR', 'name' => 'fecha_TR', 'type' => 'date', 'class' => 'form-control']); ?>
            </div>
        </div>
        <div class="form-row">
            <div class=" col">
                <?= $this->Form->control(' ', ['id' => 'ph', 'name' => 'ph', 'placeholder' => 'Cantidad de ph del cultivo', 'class' => 'form-control']); ?>
            </div>
            <div class="col">
                <?= $this->Form->control(' ', ['type' => 'number', 'id' => 'humedad', 'name' => 'humedad', 'min' => '1', 'placeholder' => 'Porcentaje de humedad del cultivo', 'class' => 'form-control']); ?>
            </div>
        </div>
        <div class="form-row">
            <div class=" col">
                <?= $this->Form->control(' ', ['id' => 'nitrogeno', 'name' => 'nitrogeno', 'placeholder' => 'Cantidad de nitrito del cultivo', 'class' => 'form-control']); ?>
            </div>
            <div class="col">
                <?= $this->Form->control(' ', ['id' => 'fosforo', 'name' => 'fosforo', 'placeholder' => 'Cantidad de fosforo del cultivo', 'class' => 'form-control']); ?>
            </div>
        </div>
        <div class="form-row">
            <div class=" col">
                <?= $this->Form->control(' ', ['id' => 'potasio', 'name' => 'potasio', 'placeholder' => 'Cantidad de potasio del cultivo', 'class' => 'form-control']); ?>
            </div>
            <div class="col">
                <?= $this->Form->control(' ', ['id' => 'dioxidoCB', 'name' => 'dioxidoCB', 'placeholder' => 'Cantidad de dioxidoCB del cultivo', 'class' => 'form-control']); ?>
            </div>
        </div>
        <?= $this->Form->control(' ', ['id' => 'comentario', 'name' => 'comentario', 'placeholder' => 'Comentario con respecto al cultivo', 'class' => 'form-control']); ?>
    </center>
    <br>
    <?= $this->Form->button('Guardar monitoreo', ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>