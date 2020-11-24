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
session_start();
?>
<div class="container">
    <div class="text-center border border-light p-5">
        <?= $this->Form->create() ?>
        <center>
            <div class="reducir">
                <fieldset>
                    <p class="h1 mb-4">Login</p>
                    <?php
                    echo $this->Form->control(' ', ['id' => 'email', 'name' => 'email', 'placeholder' => 'E-mail', 'class' => 'form-control']);
                    ?>
                    <?php
                    echo $this->Form->control(' ', ['type' => 'password', 'id' => 'contraseña', 'name' => 'contraseña', 'type' => 'password', 'placeholder' => 'Password', 'class' => 'form-control']);
                    ?>
                </fieldset>
                <br>
                <?= $this->Form->button('Submit') ?>
                <?= $this->Form->end() ?>
            </div>
        </center>
    </div>
</div>
