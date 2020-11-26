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
<div class="container">
    <center>
        <p class="h1 mb-2">Editar insumo</p>

        <?= $this->Form->create($insumo) ?>
        <fieldset style="width: 80%;">
            <?php
            echo $this->Form->control('nombre', ['class' => 'form-control']);
            echo $this->Form->control('precio_unitario', ['id' => 'precio_unitario', 'name' => 'precio_unitario', 'class' => 'form-control', 'min' => '1', 'onchange' => 'precio()']);
            ?>
            <label>Cantidad</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" min='1' onchange="precio()" value="<?php $insumo->precio_total / $insumo->precio_unitario ?>">
            <?php
            echo $this->Form->control('precio_total', ['id' => 'precio_total', 'name' => 'precio_total', 'class' => 'form-control', 'disabled']);
            echo $this->Form->control('cultivos_id', ['options' => $opcion, 'class' => 'form-control mb-4']);
            ?>
        </fieldset>
        <div class="form-row 2">
            <div class="col mb-2">
                <?= $this->Form->button('Guardar insumo', ['class' => 'btn btn-success']) ?>
                <?= $this->Form->postLink(
                    __('Eliminar'),
                    ['action' => 'delete', $insumo->id_insumos],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $insumo->id_insumos), 'class' => 'btn btn-success']
                ) ?>
                <?= $this->Html->link(__('Lista de insumos'), ['action' => 'index'], ['class' => 'btn btn-success']) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </center>
</div>

<script>
    let unitario = document.getElementById("precio_unitario").value;
    let total = document.getElementById("precio_total").value;
    let cantidad = document.getElementById("cantidad");
    cantidad.value = total / unitario;

    function precio() {
        let precio = document.getElementById("precio_unitario").value;
        let cantidad = document.getElementById("cantidad").value;
        let total = 0;
        total = precio * cantidad;
        let valor = document.getElementById("precio_total");
        valor.value = total;
    }
</script>