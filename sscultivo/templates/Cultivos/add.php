<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
session_start();
?>
<div class="container">
    <?= $this->Form->create($cultivo, ['class' => 'text-center border border-light p-5']) ?>
    <center>
        <div class="reducir">
            <fieldset>
                <p class="h1 mb-4">Crear cultivo</p>
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
                <div id="datos" style="display:none;">
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
                <!-- campos Peces -->
                <div id="peces" style="display:none;">
                    <div class="col">
                        <?php
                        echo $this->Form->control(' ', ['id' => 'pez', 'name' => 'pez', 'placeholder' => 'Nombre del pez', 'class' => 'form-control']);
                        ?>
                    </div>
                    <div class="col">
                        <?php
                        echo $this->Form->control(' ', ['type' => 'number', 'id' => 'cantidad_pez', 'name' => 'cantidad_pez', 'min' => '1', 'placeholder' => 'Cantidad de peces', 'class' => 'form-control']);
                        ?>
                    </div>
                </div>
                <!-- Campos Plantas -->
                <div id="plantas" style="display:none;">
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
            <?= $this->Form->button('Guardar cultivo', ['class' => 'btn btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </center>
</div>

<script>
    function desplegar() {
        let tipo = document.getElementById("tipo_cultivo").value;
        if (tipo == 'Tierra') {
            // document.getElementById("datos").style = "block";
            document.getElementById("datos").style = "form-row block";
            // document.getElementById("plantas").style.display = "block";
            document.getElementById("plantas").style = "form-row block";
            document.getElementById("peces").style.display = "none";
        } else if (tipo == 'Acuaponico') {
            // document.getElementById("datos").style.display = "block";
            document.getElementById("datos").style = "form-row block";
            // document.getElementById("plantas").style.display = "block";
            document.getElementById("plantas").style = "form-row block";
            // document.getElementById("peces").style.display = "block";
            document.getElementById("peces").style = "form-row block";
        } else {
            document.getElementById("datos").style.display = "none";
            document.getElementById("plantas").style.display = "none";
            document.getElementById("peces").style.display = "none";
        }
    }
</script>