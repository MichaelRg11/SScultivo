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
            <canvas id="myChart" width="50" height="50"></canvas>
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
                labels: ['Temperatura', 'Nitrogeno', 'Nitritos', 'Oxigeno Disuelto', 'Proteina Alimento', 'Ph','Tiempo Crecimiento','Exposicion Solar'],
                datasets: [{
                    label: '# of Votes',
                    data: [<?= h($monitoreoAc->temperatura) ?>, <?= h($monitoreoAc->nitrogeno) ?>, <?= h($monitoreoAc->nitritos) ?>, <?= h($monitoreoAc->oxigeno_disuelto) ?>,
                    <?= h($monitoreoAc->proteina_alimento) ?>, <?= h($monitoreoAc->ph) ?>, <?= h($monitoreoAc->tiempo_crecimiento) ?>, <?= h($monitoreoAc->exposicion_solar) ?>],
                    backgroundColor: [
                        <?php
                            $temperatura=$monitoreoAc->temperatura;
                            echo $temperatura;
                            if($temperatura>0){?>
                            'rgba(255, 99, 132, 0.2)',
                           <?php }?>
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
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
</script>
