<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonitoreoAc $monitoreoAc
 */
session_start();
?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css">

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Monitoreo Ac'), ['action' => 'edit', $monitoreoAc->idmonitoreo_AC], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Monitoreo Ac'), ['action' => 'delete', $monitoreoAc->idmonitoreo_AC], ['confirm' => __('Are you sure you want to delete # {0}?', $monitoreoAc->idmonitoreo_AC), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Monitoreo Ac'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Monitoreo Ac'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="monitoreoAc view content">
            <h3><?= h($monitoreoAc->idmonitoreo_AC) ?></h3>
            <table>
                <tr>
                    <th><?= __('Temperatura') ?></th>
                    <td><?= h($monitoreoAc->temperatura) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nitrogeno') ?></th>
                    <td><?= h($monitoreoAc->nitrogeno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nitritos') ?></th>
                    <td><?= h($monitoreoAc->nitritos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Oxigeno Disuelto') ?></th>
                    <td><?= h($monitoreoAc->oxigeno_disuelto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Proteina Alimento') ?></th>
                    <td><?= h($monitoreoAc->proteina_alimento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ph') ?></th>
                    <td><?= h($monitoreoAc->ph) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tiempo Crecimiento') ?></th>
                    <td><?= h($monitoreoAc->tiempo_crecimiento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exposicion Solar') ?></th>
                    <td><?= h($monitoreoAc->exposicion_solar) ?></td>
                </tr>
                <tr>
                    <th><?= __('Comentario') ?></th>
                    <td><?= h($monitoreoAc->comentario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idmonitoreo AC') ?></th>
                    <td><?= $this->Number->format($monitoreoAc->idmonitoreo_AC) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cultivos Id2') ?></th>
                    <td><?= $this->Number->format($monitoreoAc->cultivos_id2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha AC') ?></th>
                    <td><?= h($monitoreoAc->fecha_AC) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-lg-6">
            <canvas id="peces" width="50" height="50"></canvas>
        </div>
        <div class="col-lg-6">
            <canvas id="plantas" width="50" height="50"></canvas>
        </div>
    </div>
    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js"></script>
    <script>
        var ctx = document.getElementById('peces');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Temperatura', 'Nitrogeno', 'Nitritos', 'Oxigeno Disuelto', 'Proteina Alimento'],
                datasets: [{
                    label: 'grafica de peces',
                    data: [<?= h($monitoreoAc->temperatura) ?>, <?= h($monitoreoAc->nitrogeno) ?>, <?= h($monitoreoAc->nitritos) ?>, <?= h($monitoreoAc->oxigeno_disuelto) ?>,
                    <?= h($monitoreoAc->proteina_alimento) ?>],
                    backgroundColor:[colorDinamicoTemperatura(),colorDinamicoNitrogeno(),colorDinamicoNitritos(),
                    colorDinamicoOD(),colorDinamicopPA()
                    ],
                    borderColor: [
                        'rgba(29, 185, 18, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
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

        var ctx = document.getElementById('plantas');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Ph','Tiempo Crecimiento'],
                datasets: [{
                    label: 'grafica de plantas',
                    data: [<?= h($monitoreoAc->ph) ?>, <?= h($monitoreoAc->tiempo_crecimiento) ?>],
                    backgroundColor:[colorDinamicopPH(),colorDinamicopTC()
                    ],
                    borderColor: [
                        'rgba(29, 185, 18, 1)',
                        'rgba(54, 162, 235, 1)'
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

    function generarNumero(numero){
	    return (Math.random()*numero).toFixed(0);
    }

    function colorRGB(){
        var coolor = "("+generarNumero(255)+"," + generarNumero(255) + "," + generarNumero(255) +")";
        return "rgb" + coolor;
    }

    function verde(){
        return "rgb(13, 190, 48)";
    }

    function rojo(){
        return "rgb(232, 12, 12)";
    }

    function colorDinamicoTemperatura(){
                if(<?=h($monitoreoAc->temperatura) ?>>=15 && <?=h($monitoreoAc->temperatura) ?><=22){
                    var color = verde(); 
                }else{
                   var color = rojo();
                }     
                return color;        
    }

    function colorDinamicoNitrogeno(){
                if(<?= h($monitoreoAc->nitrogeno) ?>>=15 && <?= h($monitoreoAc->nitrogeno) ?><=22){
                    var color = verde(); 
                }else{
                   var color = rojo();
                }     
                return color;        
    }

    function colorDinamicoNitritos(){
                if(<?= h($monitoreoAc->nitritos) ?>>=15 && <?= h($monitoreoAc->nitritos) ?><=22){
                    var color = verde(); 
                }else{
                   var color = rojo();
                }     
                return color;        
    }

    function colorDinamicoOD(){
                if(<?= h($monitoreoAc->oxigeno_disuelto) ?>>=15 && <?= h($monitoreoAc->oxigeno_disuelto) ?><=22){
                    var color = verde(); 
                }else{
                   var color = rojo();
                }     
                return color;        
    }

    function colorDinamicopPA(){
                if(<?= h($monitoreoAc->proteina_alimento) ?>>=15 && <?= h($monitoreoAc->proteina_alimento) ?><=22){
                    var color = verde(); 
                }else{
                   var color = rojo();
                }     
                return color;        
    }

    function colorDinamicopPH(){
                if(<?= h($monitoreoAc->ph) ?>>=15 && <?= h($monitoreoAc->ph) ?><=22){
                    var color = verde(); 
                }else{
                   var color = rojo();
                }     
                return color;        
    }

    function colorDinamicopTC(){
                if(<?= h($monitoreoAc->tiempo_crecimiento) ?>>=15 && <?= h($monitoreoAc->tiempo_crecimiento) ?><=22){
                    var color = verde(); 
                }else{
                   var color = rojo();
                }     
                return color;        
    }


</script>
