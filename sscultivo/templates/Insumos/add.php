<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Insumo $insumo
 */
session_start();
$opcion = ['0' => 'Seleccionar cultivo'];
foreach ($cultivos as $cultivo) :
    $opcion += [$cultivo->id_cultivos => $cultivo->id_cultivos . " " .  $cultivo->nombre];
endforeach;
?>
<div class="container">
    <?= $this->Form->create($insumo, ['class' => 'text-center border border-light p-4']) ?>
    <center>
        <p class="h1 mb-2">Agregar nuevo insumo</p>
        <?php
        echo $this->Form->control('nombre');
        echo $this->Form->control('precio_unitario');
        echo $this->Form->control('precio_total');
        echo $this->Form->control('cultivos_id', ['options' => $opcion]);
        ?>
        <?= $this->Form->button('Guardar monitoreo', ['class' => 'btn btn-success']) ?>
        <?= $this->Form->end() ?>
    </center>
</div>