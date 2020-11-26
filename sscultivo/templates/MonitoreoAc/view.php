<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonitoreoAc $monitoreoAc
 */
session_start();
foreach ($cultivos as $cultivo) :
    $planta = $cultivo->planta;
    $peces = $cultivo->peces;
endforeach;
?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css">
<br>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <p class="h1 mb-2">Vista de monitoreo de acuaponico</p>
                    <table class="table" style="width: 40%">
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
            <div class="col-lg-5">
                <canvas id="peces" width="50" height="50"></canvas>
                <canvas id="plantas" width="50" height="50"></canvas>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-5">
            <h5>condiciones optimas para la producción peces </h5><br>
                    <table class="table">
                        <thead class="bg-primary">
                            <tr>
                            <th scope="col">TEMPERATURA (ºC)</th>
                            <th scope="col">NITROGENO (mg/l)</th>
                            <th scope="col">NITRITOS (mg/l)</th>
                            <th scope="col">OXIGENO DISUELTO(mg/l)</th>
                            <th scope="col">PROTEINA ALIMENTO(%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-primary">
                            <td>25 - 30</td>
                            <td> menor que 1.5 </td>
                            <td>menor que 1</td>
                            <td>mayor a 4</td>
                            <td>25 - 40</td>
                            </tr>   
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-2">
                </div>
                <div class="col-lg-5">
                <h5>condiciones optimas para la producción de las plantas </h5><br>
                    <table class="table">
                        <thead class="bg-primary">
                            <tr>
                            <th scope="col">PH</th>
                            <th scope="col">TIEMPO DE CRECIMIENTO (semanas)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-primary">
                            <td>5.5 - 7.0</td>
                            <td>5 - 10</td>
                            </tr>   
                        </tbody>
                    </table>
                </div>
                
            </div>   
        </div>

    </div>
    <center>
        <div class="mb-2">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Edit Monitoreo Ac'), ['action' => 'edit', $monitoreoAc->idmonitoreo_AC], ['class' => 'btn btn-success']) ?>
            <?= $this->Form->postLink(__('Delete Monitoreo Ac'), ['action' => 'delete', $monitoreoAc->idmonitoreo_AC], ['confirm' => __('Are you sure you want to delete # {0}?', $monitoreoAc->idmonitoreo_AC), 'class' => 'btn btn-success']) ?>
            <?= $this->Html->link(__('List Monitoreo Ac'), ['action' => 'index'], ['class' => 'btn btn-success']) ?>
            <?= $this->Html->link(__('New Monitoreo Ac'), ['action' => 'add'], ['class' => 'btn btn-success']) ?>
        </div>
    </center>


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

    function verde(){
        return "rgb(13, 190, 48)";
    }

    function rojo(){
        return "rgb(232, 12, 12)";
    }

    function colorDinamicoTemperatura(){
                if(<?=h($monitoreoAc->temperatura) ?>>=25 && <?=h($monitoreoAc->temperatura) ?><=30){
                    var color = verde(); 
                }else{
                   var color = rojo();
                }     
                return color;        
    }

    function colorDinamicoNitrogeno(){
                if(<?= h($monitoreoAc->nitrogeno) ?> < 1.5){
                    var color = verde(); 
                }else{
                   var color = rojo();
                }     
                return color;        
    }

    function colorDinamicoNitritos(){
                if(<?= h($monitoreoAc->nitritos) ?> < 1 ){
                    var color = verde(); 
                }else{
                   var color = rojo();
                }     
                return color;        
    }

    function colorDinamicoOD(){
                if(<?= h($monitoreoAc->oxigeno_disuelto) ?> > 4 ){
                    var color = verde(); 
                }else{
                   var color = rojo();
                }     
                return color;        
    }

    function colorDinamicopPA(){
                if(<?= h($monitoreoAc->proteina_alimento) ?>>=25 && <?= h($monitoreoAc->proteina_alimento) ?><=40){
                    var color = verde(); 
                }else{
                   var color = rojo();
                }     
                return color;        
    }

    function colorDinamicopPH(){
                if(<?= h($monitoreoAc->ph) ?> >=5.5 && <?= h($monitoreoAc->ph) ?><=7.0){
                    var color = verde(); 
                }else{
                   var color = rojo();
                }     
                return color;        
    }

    function colorDinamicopTC(){
                if(<?= h($monitoreoAc->tiempo_crecimiento) ?>>=5 && <?= h($monitoreoAc->tiempo_crecimiento) ?><=10){
                    var color = verde(); 
                }else{
                   var color = rojo();
                }     
                return color;        
    }


</script>
