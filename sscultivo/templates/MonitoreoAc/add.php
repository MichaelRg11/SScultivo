<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonitoreoAc $monitoreoAc
 */
session_start();
$opcion = ['0' => 'Seleccionar cultivo'];
foreach ($cultivos as $cultivo) :
    if ($cultivo->tipo_cultivo == 'Acuaponico') {
        $opcion += [$cultivo->id_cultivos => $cultivo->id_cultivos . " " .  $cultivo->nombre];
    }
endforeach;
?>
<div class="container">
    <?= $this->Form->create($monitoreoAc, ['class' => 'text-center border border-light p-4']) ?>
    <center>
        <fieldset>
            <p class="h1 mb-2">Crear monitoreo acuaponico</p>
            <?= $this->Form->control(' ', ['id' => 'fecha_AC', 'name' => 'fecha_AC', 'type' => 'date', 'placeholder' => 'Fecha de creacion del insumo', 'class' => 'form-control']); ?>
            <div class="form-row">
                <div class=" col">
                    <?= $this->Form->control(' ', ['id' => 'temperatura', 'name' => 'temperatura', 'placeholder' => 'Temperatura del cultivo', 'class' => 'form-control']); ?>
                </div>
                <div class="col">
                    <?= $this->Form->control(' ', ['id' => 'nitrogeno', 'name' => 'nitrogeno', 'placeholder' => 'Cantidad de nitrogeno del cultivo', 'class' => 'form-control']); ?>
                </div>
            </div>
            <div class="form-row">
                <div class=" col">
                    <?= $this->Form->control(' ', ['id' => 'nitritos', 'name' => 'nitritos', 'placeholder' => 'Cantidad de nitritos del cultivo', 'class' => 'form-control']); ?>
                </div>
                <div class="col">
                    <?= $this->Form->control(' ', ['id' => 'oxigeno_disuelto', 'name' => 'oxigeno_disuelto', 'placeholder' => 'Cantidad de oxigeno disuelto del cultivo', 'class' => 'form-control']); ?>
                </div>
            </div>
            <div class="form-row">
                <div class=" col">
                    <?= $this->Form->control(' ', ['id' => 'proteina_alimento', 'name' => 'proteina_alimento', 'placeholder' => 'Cantidad de proteina alimento del cultivo', 'class' => 'form-control']); ?>
                </div>
                <div class="col">
                    <?= $this->Form->control(' ', ['id' => 'ph', 'name' => 'ph', 'placeholder' => 'Cantidad de ph del cultivo', 'class' => 'form-control']); ?>
                </div>
            </div>
            <div class="form-row">
                <div class=" col">
                    <?= $this->Form->control(' ', ['id' => 'tiempo_crecimiento', 'name' => 'tiempo_crecimiento', 'placeholder' => 'Cantidad de tiempo crecimiento del cultivo', 'class' => 'form-control']); ?>
                </div>
                <div class="col">
                    <?= $this->Form->control(' ', ['id' => 'exposicion_solar', 'name' => 'exposicion_solar', 'placeholder' => 'Cantidad de exposicion solar del cultivo', 'class' => 'form-control']); ?>
                </div>
            </div>
            <div class="form-row">
                <div class=" col">
                    <?= $this->Form->control(' ', ['id' => 'comentario', 'name' => 'comentario', 'placeholder' => 'Comentarios respecto al cultivo', 'class' => 'form-control']); ?>
                </div>
                <div class="col">
                    <?= $this->Form->control(' ', ['options' =>  $opcion, 'id' => 'cultivos_id2', 'name' => 'cultivos_id2', 'placeholder' => 'Cantidad de dioxidoCB del cultivo', 'class' => 'form-control']); ?>
                </div>
            </div>
        </fieldset>
    </center>
    <br>
    <?= $this->Form->button('Guardar monitoreo', ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>