<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cultivo $cultivo
 */
session_start();
?>
<div class="container">
    <center>
        <p class="h1 mb-2">Editar cultivo</p>
        <?= $this->Form->create($cultivo) ?>
        <fieldset>
            <?php echo $this->Form->control('tipo_cultivo', ['disabled', 'class' => 'form-control']); ?>
            <div class="form-row" id="peces">
                <div class="col">
                    <?php
                    echo $this->Form->control('nombre', ['placeholder' => 'Nombre del cultivo', 'class' => 'form-control']);
                    ?>
                </div>
                <div class="col">
                    <?php
                    echo $this->Form->control('fecha', ['class' => 'form-control']);
                    ?>
                </div>
            </div>
            <?php if ($cultivo->tipo_cultivo != 'Tierra') { ?>
                <div class="form-row" id="peces">
                    <div class="col">
                        <?php
                        echo $this->Form->control('pez', ['placeholder' => 'Nombre del pez', 'class' => 'form-control']);
                        ?>
                    </div>
                    <div class="col">
                        <?php
                        echo $this->Form->control('cantidad_planta', ['type' => 'number', 'min' => '1', 'placeholder' => 'Cantidad de peces', 'class' => 'form-control']);
                        ?>
                    </div>
                </div>
            <?php  } ?>
            <div class="form-row" id="plantas">
                <div class="col">
                    <?php
                    echo $this->Form->control('planta', ['placeholder' => 'Nombre de la planta', 'class' => 'form-control']);
                    ?>
                </div>
                <div class="col">
                    <?php
                    echo $this->Form->control('cantidad_planta', ['type' => 'number', 'min' => '1', 'placeholder' => 'Cantidad de plantas', 'class' => 'form-control mb-4']);
                    ?>
                </div>
            </div>
        </fieldset>
        <div class="form-row 2">
            <div class="col mb-2">
                <?= $this->Form->button('Guardar cultivo', ['class' => 'btn btn-success']) ?>
                <?= $this->Form->postLink(
                    __('Eliminar'),
                    ['action' => 'delete', $cultivo->id_cultivos],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $cultivo->id_cultivos), 'class' => 'btn btn-success']
                ) ?>
                <?= $this->Html->link(__('Lista de Cultivos'), ['action' => 'index'], ['class' => 'btn btn-success']) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </center>
</div>