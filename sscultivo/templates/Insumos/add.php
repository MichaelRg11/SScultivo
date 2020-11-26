<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Insumo $insumo
 */
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
        <?php
        echo $this->Form->control('precio_total', ['class' => 'form-control', 'readonly']);
        echo $this->Form->control('cultivos_id', ['options' => $opcion, 'class' => 'form-control mb-4']);
        ?>
        <?= $this->Form->button('Guardar Insumo', ['class' => 'btn btn-success', 'onchange' => 'precio()']) ?>
        <?= $this->Form->end() ?>
    </center>
</div>
<script type="text/javascript">
    function precio() {
        let precio = document.getElementById("precio_unitario").value;
        let cantidad = document.getElementById("cantidad").value;
        let total = 0;
        total = precio * cantidad;
        let valor = document.getElementById("precio-total");
        valor.value = total;
    }
</script>