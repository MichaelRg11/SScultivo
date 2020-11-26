<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
session_start();
$opcion = [
    'Seleccionar pez',
    'carpa comun' => 'Carpa comun',
    'tilapia del nilo' => 'Tilapia del nilo',
    'pez gato' => 'Pez gato',
    'truca arcoiris' => 'Truca arcoiris'
];

$opcion2 = [
    'Seleccionar planta',
    'pepino' => 'Pepino',
    'tomate' => 'Tomate',
    'brocoli' => 'Pez gato',
    // 'truca arcoiris' => 'Truca arcoiris'
];
?>
<div class="container">
    <?= $this->Form->create($cultivo, ['class' => 'text-center border border-light p-4']) ?>
    <center>
        <div class="reducir">
            <fieldset>
                <p class="h1 mb-2">Crear cultivo</p>
                <?php echo $this->Form->select('Tipo de cultivo', [
                    '0' => 'Seleccionar tipo de cultivo',
                    'Tierra' => 'Cultivo de tierra',
                    'Acuaponico' => 'Cultivo acuaponico'
                ], [
                    'id' => 'tipo_cultivo',
                    'name' => 'tipo_cultivo',
                    'type' => 'select',
                    'placeholder' => 'Tipo de cultivo',
                    'class' => 'form-control',
                    'onchange' => 'desplegar();'
                ])
                ?>
                <div id="peces" style="display:none;" class="mt-4">
                    <select name="pez" id="pez" placeholder="Tipo de cultivo" class="form-control"">
                        <option value=" 0">Seleccionar tipo pez</option>
                        <option value="carpa comun">Carpa comun</option>
                        <option value="tilapia del nilo">Tilapia del nilo</option>
                        <option value="pez gato">Pez gato</option>
                        <option value="truca arcoiris">Trucha arcoiris</option>
                    </select>
                    <?php
                    echo $this->Form->control(' ', ['type' => 'number', 'id' => 'cantidad_pez', 'name' => 'cantidad_pez', 'min' => '1', 'placeholder' => 'Cantidad de peces', 'class' => 'form-control']);
                    ?>
                </div>
                <div class="form-row" id="datos" style="display:none;">
                    <div class="col">
                        <?php
                        echo $this->Form->control(' ', ['id' => 'nombre', 'name' => 'nombre', 'placeholder' => 'Nombre del cultivo', 'class' => 'form-control']);
                        ?>
                    </div>
                    <div class="col">
                        <?php
                        echo $this->Form->control(' ', ['id' => 'fecha', 'name' => 'fecha', 'type' => 'date', 'placeholder' => 'Fecha de creacion del cultivo', 'class' => 'form-control']);
                        ?>
                    </div>
                </div>
                <!-- Campos Plantas -->
                <div class="form-row" id="plantas" style="display:none;">
                    <div class="col">
                        <?php
                        echo $this->Form->control(' ', ['id' => 'planta', 'name' => 'planta', 'placeholder' => 'Nombre de la planta', 'class' => 'form-control']);
                        ?>
                    </div>
                    <div class="col">
                        <?php
                        echo $this->Form->control(' ', ['type' => 'number', 'id' => 'cantidad_planta', 'name' => 'cantidad_planta', 'min' => '1', 'placeholder' => 'Cantidad de plantas', 'class' => 'form-control']);
                        ?>
                    </div>
                </div>
                <?php echo $this->Form->control('usuario_id', ['type' => 'hidden', 'value' => $_SESSION['id']]); ?>
            </fieldset>
            <br>
            <?= $this->Form->button('Guardar cultivo', ['id' => 'btn','class' => 'btn btn-success', 'style', 'display:none;']) ?>
            <?= $this->Form->end() ?>
        </div>
    </center>
</div>

<script>
    function desplegar() {
        let tipo = document.getElementById("tipo_cultivo").value;
        if (tipo == 'Tierra') {
            document.getElementById("datos").style = "block";
            document.getElementById("datos").style = "form-row";
            document.getElementById("plantas").style.display = "block";
            document.getElementById("plantas").style = "form-row";
            document.getElementById("peces").style.display = "none";
            document.getElementById("btn").style.display = "block";
        } else if (tipo == 'Acuaponico') {
            document.getElementById("datos").style.display = "block";
            document.getElementById("datos").style = "form-row";
            document.getElementById("plantas").style.display = "block";
            document.getElementById("plantas").style = "form-row";
            document.getElementById("peces").style.display = "block";
            document.getElementById("peces").style = "form-row";
            document.getElementById("btn").style.display = "block";
        } else {
            document.getElementById("datos").style.display = "none";
            document.getElementById("plantas").style.display = "none";
            document.getElementById("peces").style.display = "none";
            document.getElementById("btn").style.display = "none";
        }
    }
</script>