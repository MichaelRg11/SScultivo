<style>
    .reducir {
        width: 50%;
    }
</style>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<div class="container">
    <?= $this->Form->create($usuario, ['class' => 'text-center border border-light p-5']) ?>
    <center>
        <div class="reducir">
            <fieldset>
                <p class="h1 mb-4">Sign up</p>
                <?php
                echo $this->Form->control(' ', ['id' => 'CC', 'name' => 'CC', 'type' => 'number', 'min' => '1', 'placeholder' => 'Numero de identificacion', 'class' => 'form-control']);
                ?>
                <div class="form-row">
                    <div class="col">
                        <!-- First name -->
                        <?php
                        echo $this->Form->control(' ', ['id' => 'nombre', 'name' => 'nombre', 'placeholder' => 'First name', 'class' => 'form-control']);
                        ?>
                    </div>
                    <div class="col">
                        <!-- Last name -->
                        <?php
                        echo $this->Form->control(' ', ['id' => 'apellidos', 'name' => 'apellidos', 'placeholder' => 'Last name', 'class' => 'form-control']);
                        ?>
                    </div>
                </div>
                <?php echo $this->Form->control(' ', ['id' => 'edad', 'name' => 'edad', 'type' => 'number', 'min' => '1', 'placeholder' => 'age', 'class' => 'form-control']); ?>
                <div class="form-row">
                    <div class="col">
                        <!-- First name -->
                        <?php
                        echo $this->Form->control(' ', ['id' => 'email', 'name' => 'email', 'placeholder' => 'E-mail', 'class' => 'form-control']);
                        ?>
                    </div>
                    <div class="col">
                        <!-- Last name -->
                        <?php
                        echo $this->Form->control(' ', ['type' => 'password', 'id' => 'contraseña', 'name' => 'contraseña', 'type' => 'password', 'placeholder' => 'Password', 'class' => 'form-control']);
                        ?>
                    </div>
                </div>
            </fieldset>
            <br>
            <?= $this->Form->button('Registrar', ['class' => 'btn btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </center>
</div>