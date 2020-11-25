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
<div class="container" style="width: 50%;">
    <?= $this->Form->create($insumo, ['class' => 'text-center border border-light p-4']) ?>
    <center>
        <p class="h1 mb-2">Agregar nuevo insumo</p>
        <?php
        echo $this->Form->control('nombre', ['class' => 'form-control']);
        echo $this->Form->control('precio_unitario', ['id' => 'precio_unitario', 'name' => 'precio_unitario', 'class' => 'form-control', 'min' => '1', 'onchange' => 'precio()']);
        ?>
        <label>Cantidad</label>
        <input type="number" name="cantidad" id="cantidad" class="form-control" min='1' onchange="precio()">
        <input type="number" id="precio_total" name="precio_total">
        <?php
        // echo $this->Form->control('precio_total', ['id' => 'precio_total', 'name' => 'precio_total', 'class' => 'form-control',]);
        echo $this->Form->control('cultivos_id', ['options' => $opcion, 'class' => 'form-control mb-4']);
        ?>

        <?= $this->Form->button('Guardar monitoreo', ['class' => 'btn btn-success', 'onchange' => 'precio()']) ?>
        <?= $this->Form->end() ?>
    </center>
</div>

<script>
    
    alert("hola");
    document.getElementsById("precio_unitario").value = '12';
    document.getElementsById("cantidad").value = '12';
    let h = document.getElementsById("precio_total");
    h.value = '1200';

    function precio() {
        let precio = document.getElementsById("precio_unitario").value;
        let cantidad = document.getElementsById("cantidad").value;
        let total = 0;
        total = precio * cantidad;
        alert(precio);
        alert(cantidad);
        let valor = document.getElementsById("precio_total");
        valor.value = total;
    }
</script>