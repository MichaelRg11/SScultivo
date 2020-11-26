<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonitoreoAc $monitoreoAc
 */
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
            <div class="form-row">
                <div class="col">
                    <?= $this->Form->control(' ', ['options' =>  $opcion, 'id' => 'cultivos_id2', 'name' => 'cultivos_id2', 'placeholder' => 'Cantidad de dioxidoCB del cultivo', 'class' => 'form-control']); ?>
                </div>
                <div class=" col">
                    <?= $this->Form->control(' ', ['id' => 'fecha_AC', 'name' => 'fecha_AC', 'type' => 'date', 'placeholder' => 'Fecha de creacion del insumo', 'class' => 'form-control']); ?>
                </div>
            </div>
            <div class="form-row">
                <div class=" col">
                    <?= $this->Form->control(' ', ['id' => 'temperatura', 'name' => 'temperatura', 'placeholder' => 'Temperatura del cultivo: En ºC', 'class' => 'form-control']); ?>
                </div>
                <div class="col">
                    <?= $this->Form->control(' ', ['id' => 'nitrogeno', 'name' => 'nitrogeno', 'placeholder' => 'Cantidad de nitrogeno del cultivo: En mg/l', 'class' => 'form-control']); ?>
                </div>
            </div>
            <div class="form-row">
                <div class=" col">
                    <?= $this->Form->control(' ', ['id' => 'nitritos', 'name' => 'nitritos', 'placeholder' => 'Cantidad de nitritos del cultivo: En mg/l', 'class' => 'form-control']); ?>
                </div>
                <div class="col">
                    <?= $this->Form->control(' ', ['id' => 'oxigeno_disuelto', 'name' => 'oxigeno_disuelto', 'placeholder' => 'Cantidad de oxigeno disuelto del cultivo: En mg/l', 'class' => 'form-control']); ?>
                </div>
            </div>
            <div class="form-row">
                <div class=" col">
                    <?= $this->Form->control(' ', ['id' => 'proteina_alimento', 'name' => 'proteina_alimento', 'placeholder' => 'Cantidad de proteina alimento del cultivo: En Porcentaje', 'class' => 'form-control']); ?>
                </div>
                <div class="col">
                    <?= $this->Form->control(' ', ['id' => 'ph', 'name' => 'ph', 'placeholder' => 'Cantidad de ph del cultivo', 'class' => 'form-control']); ?>
                </div>
            </div>
            <div class="form-row">
                <div class=" col">
                    <?= $this->Form->control(' ', ['id' => 'tiempo_crecimiento', 'name' => 'tiempo_crecimiento', 'placeholder' => 'Tiempo de crecimiento: Se mide en semanas', 'class' => 'form-control']); ?>
                </div>
                <div class="col">
                    <?= $this->Form->control(' ', ['id' => 'exposicion_solar', 'name' => 'exposicion_solar', 'onkeypress' => 'return soloLetras(event)' , 'placeholder' => 'Exposicion solar: Alta, Media, Baja', 'class' => 'form-control']); ?>
                </div>
            </div>
            <?= $this->Form->control(' ', ['id' => 'comentario', 'name' => 'comentario', 'placeholder' => 'Comentarios respecto al cultivo', 'class' => 'form-control']); ?>
        </fieldset>
    </center>
    <br>
    <?= $this->Form->button('Guardar monitoreo', ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>

<script>
    function soloLetras(e) {
        var key = e.keyCode || e.which,
            tecla = String.fromCharCode(key).toLowerCase(),
            letras = " áéíóúabcdefghijklmnñopqrstuvwxyz",
            especiales = [8, 37, 39, 46],
            tecla_especial = false;

        for (var i in especiales) {
            if (key == especiales[i]) {
                tecla_especial = true;
                break;
            }
        }
        if (letras.indexOf(tecla) == -1 && !tecla_especial) {
            return false;
        }
    }
</script>