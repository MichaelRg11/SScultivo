<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonitoreoTr $monitoreoTr
 */
session_start();
?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css">

<div class="container">
    <center>
        <p class="h1 mb-2">Vista de monitoreo de tierra</p>
        <table class="table" style="width: 40%">
            <tr>
                <th><?= __('Ph') ?></th>
                <td><?= h($monitoreoTr->ph) ?></td>
            </tr>
            <tr>
                <th><?= __('Nitrogeno') ?></th>
                <td><?= h($monitoreoTr->nitrogeno) ?></td>
            </tr>
            <tr>
                <th><?= __('Fosforo') ?></th>
                <td><?= h($monitoreoTr->fosforo) ?></td>
            </tr>
            <tr>
                <th><?= __('Potasio') ?></th>
                <td><?= h($monitoreoTr->potasio) ?></td>
            </tr>
            <tr>
                <th><?= __('DioxidoCB') ?></th>
                <td><?= h($monitoreoTr->dioxidoCB) ?></td>
            </tr>
            <tr>
                <th><?= __('Idmonitoreo TR') ?></th>
                <td><?= $this->Number->format($monitoreoTr->idmonitoreo_TR) ?></td>
            </tr>
            <tr>
                <th><?= __('Humedad') ?></th>
                <td><?= h($monitoreoTr->humedad) ?></td>
            </tr>
            <tr>
                <th><?= __('Cultivos Id1') ?></th>
                <td><?= $this->Number->format($monitoreoTr->cultivos_id1) ?></td>
            </tr>
            <tr>
                <th><?= __('Fecha TR') ?></th>
                <td><?= h($monitoreoTr->fecha_TR) ?></td>
            </tr>
            <tr>
                <th><?= __('Comentario') ?></th>
                <td><?= h($monitoreoTr->comentario) ?></td>
            </tr>
        </table>
        <div class="mb-2">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Editar monitoreo Tr'), ['action' => 'edit', $monitoreoTr->idmonitoreo_TR], ['class' => 'btn btn-success']) ?>
            <?= $this->Form->postLink(__('Eliminar monitoreo Tr'), ['action' => 'delete', $monitoreoTr->idmonitoreo_TR], ['confirm' => __('Are you sure you want to delete # {0}?', $monitoreoTr->idmonitoreo_TR), 'class' => 'btn btn-success']) ?>
            <?= $this->Html->link(__('Lista de monitoreo Tr'), ['action' => 'index'], ['class' => 'btn btn-success']) ?>
            <?= $this->Html->link(__('Nuevo monitoreo TR'), ['action' => 'add'], ['class' => 'btn btn-success']) ?>
        </div>
    </center>
</div>
<br>
<br>
    
    <div class="row">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-6">
            <canvas id="myChart" width="50" height="50"></canvas>
        </div>
        <div class="col-lg-3">      
        </div>
    </div>
    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js"></script>
    <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['PH','Humedad','Nitrogeno', 'Fosforo', 'potasio', 'DioxidoCB'],
                datasets: [{
                    label: '# of Votes',
                    data: [<?= h($monitoreoTr->ph) ?>,<?= h($monitoreoTr->humedad) ?>,
                    <?= h($monitoreoTr->nitrogeno) ?>,<?= h($monitoreoTr->fosforo) ?>,<?= h($monitoreoTr->potasio) ?>,
                    <?= h($monitoreoTr->dioxidoCB) ?>],
                    backgroundColor: [colorDinamicoPH(), colorDinamicoHumedad(), colorDinamicoNitrogeno(), 
                    colorDinamicoFosforo(), colorDinamicoPotasio(), colorDinamicoDC()                        
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

    function verde(){
        return "rgb(13, 190, 48)";
    }

    function rojo(){
        return "rgb(232, 12, 12)";
    }

    function colorDinamicoPH(){
        if(<?= h($monitoreoTr->ph) ?>>=15 && <?= h($monitoreoTr->ph) ?><=22){
            var color = verde(); 
        }else{
            var color = rojo();
        }     
        return color;        
    }
    

    function colorDinamicoHumedad(){
        if(<?= h($monitoreoTr->humedad) ?>>=15 &&<?= h($monitoreoTr->humedad) ?><=22){
            var color = verde(); 
        }else{
            var color = rojo();
        }     
        return color;        
    }

    function colorDinamicoNitrogeno(){
        if(<?= h($monitoreoTr->nitrogeno) ?>>=15 &&<?= h($monitoreoTr->nitrogeno) ?><=22){
            var color = verde(); 
        }else{
            var color = rojo();
        }     
        return color;        
    }
    
    <?= h($monitoreoTr->dioxidoCB) ?>

    function colorDinamicoFosforo(){
        if(<?= h($monitoreoTr->fosforo) ?>>=15 &&<?= h($monitoreoTr->fosforo) ?><=22){
            var color = verde(); 
        }else{
            var color = rojo();
        }     
        return color;        
    }

    function colorDinamicoPotasio(){
        if(<?= h($monitoreoTr->potasio) ?>>=15 &&<?= h($monitoreoTr->potasio) ?><=22){
            var color = verde(); 
        }else{
            var color = rojo();
        }     
        return color;        
    }

    function colorDinamicoDC(){
        if(<?= h($monitoreoTr->dioxidoCB) ?>>=15 &&<?= h($monitoreoTr->dioxidoCB) ?><=22){
            var color = verde(); 
        }else{
            var color = rojo();
        }     
        return color;        
    }

</script>