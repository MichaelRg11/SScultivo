<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\ORM\TableRegistry;

/**
 * Categorias Controller
 *
 * @property \App\Model\Table\CategoriasTable $Categorias
 * @method \App\Model\Entity\Categoria[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReportesController extends AppController
{
  /**
   * Index method
   *
   * @return \Cake\Http\Response|null|void Renders view
   */
  public function index()
  {
  }

  public function ejemplo()
  {
    require  ROOT . DS . 'vendor' . DS . 'tcpdf' . DS . 'Pdf.php';
    $pdf = new \Pdf();
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('SSCULTIVO');
    $pdf->SetTitle('Reporte Cultivo en Especifico');
    $pdf->SetSubject('Informe General');
    $pdf->SetKeywords('PDF, reportes');
    $pdf->SetMargins(10, 25.2, 10);
    $pdf->SetAutoPageBreak(TRUE, 13.4);
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    // add a page

    $pdf->AddPage('P', 'LETTER');
    $pdf->SetFont('times', '', 12, '', true);
    $style3 = array('width' => 1, 'cap' => 'round', 'join' => 'round', 'dash' => '2,10', 'color' => array(255, 0, 0));
    $style4 = array('L' => 0,
                'T' => array('width' => 0, 'cap' => 'butt', 'join' => 'miter', 'dash' => '', 'phase' => 10, 'color' => array(0, 0, 0)),
                'R' => array('width' => 0, 'cap' => 'round', 'join' => 'miter', 'dash' => '', 'color' => array(0, 0, 0)),
                'B' => array('width' => 0, 'cap' => 'square', 'join' => 'miter', 'dash' => ''));

    $pdf->Text(100, 150, 'Rectangle examples');
    $pdf->Rect(20, 50, 20, 100, 'DF', $style4, array(193, 66, 66));
    $pdf->Rect(145, 10, 40, 20, 'D', array('all' => $style3));

   /* $xc = 105;
    $yc = 100;
    $r = 50;

    $pdf->SetFillColor(0, 0, 255);
    $pdf->PieSector($xc, $yc, $r, 20, 120, 'FD', false, 0, 2);

    $pdf->SetFillColor(0, 255, 0);
    $pdf->PieSector($xc, $yc, $r, 120, 250, 'FD', false, 0, 2);

    $pdf->SetFillColor(255, 0, 0);
    $pdf->PieSector($xc, $yc, $r, 250, 20, 'FD', false, 0, 2);*/

    // write labels
    $pdf->SetTextColor(255, 255, 255);
    $pdf->Text(105, 65, 'BLUE');
    $pdf->Text(60, 95, 'GREEN');
    $pdf->Text(120, 115, 'RED');

    // ---------------------------------------------------------

    //Close and output PDF document
    $pdf->Output('example_031.pdf', 'I');
  }

  //--- Reporte de un cultivo en especifico ---
  public function cultivousuario($id = null)
  {
    require  ROOT . DS . 'vendor' . DS . 'tcpdf' . DS . 'Pdf.php';

    $pdf = new \Pdf();
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('SSCULTIVO');
    $pdf->SetTitle('Reporte Cultivo en Especifico');
    $pdf->SetSubject('Informe General');
    $pdf->SetKeywords('PDF, reportes');
    $pdf->SetMargins(10, 25.2, 10);
    $pdf->SetAutoPageBreak(TRUE, 13.4);
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    // add a page
    $pdf->AddPage('P', 'LETTER');
    $pdf->SetFont('times', '', 12, '', true);

    $condit = array('conditions' => array('Cultivos.id_cultivos' => $id));
    $cultivoUsuario =  TableRegistry::getTableLocator()->get('Cultivos')->find('all', $condit)->toArray();

    foreach ($cultivoUsuario  as $reg) {
      $html = '
         <br>
         <h3> Reporte de la Informacion de un Cultivo </h3>
         <table cellspacing="0" cellpadding="1" border="1">
         <tr>
          <th> <b>Tipo de Cultivo</b> </th>
          <th> <b>Nombre</b> </th>
          <th> <b>Fecha</b> </th>';
      if ($reg->tipo_cultivo == 'Acuaponico') {
        $html .=
          '<th> <b>Pez</b> </th>
                <th> <b>N° Peces</b> </th>';
      }

      $html .= '<th> <b>Planta</b> </th>
          <th> <b>N° Plantas</b> </th>
         </tr>
           <tr>
             <td> ' . $reg->tipo_cultivo . '</td>
             <td> ' . $reg->nombre . '</td>
             <td> ' . $reg->fecha . '</td>';

      if ($reg->tipo_cultivo == 'Acuaponico') {
        $html .=
          '<td> ' . $reg->pez . '</td>
               <td> ' . $reg->cantidad_pez . '</td>';
      }

      $html .= '<td> ' . $reg->planta . '</td>
             <td> ' . $reg->cantidad_planta . '</td>
            </tr>';
    }

    $html .= '</table>';
    $pdf->writeHTML($html, true, false, true, false, '');
    $pdf->lastPage();
    $pdf->Output('Listado_cultivos_usuario.pdf', 'I');
  }

  //--- Reporte de cultivos entre 2 fechas ---
  public function cultivofechas($fecha1 = null, $fecha2 = null)
  {
    require  ROOT . DS . 'vendor' . DS . 'tcpdf' . DS . 'Pdf.php';

    $pdf = new \Pdf();
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('SSCULTIVO');
    $pdf->SetTitle('Reporte Cultivo entre Fechas');
    $pdf->SetSubject('Informe General');
    $pdf->SetKeywords('PDF, reportes');
    $pdf->SetMargins(10, 25.2, 10);
    $pdf->SetAutoPageBreak(TRUE, 13.4);
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    // add a page
    $pdf->AddPage('L', 'LETTER');
    $pdf->SetFont('times', '', 12, '', true);

    $id_usuario = 1;
    $fecha1 = '2020-10-23';
    $fecha2 = '2020-11-30';

    $condit = array('conditions' => array('Cultivos.usuario_id' => $id_usuario, 'Cultivos.fecha >=' => $fecha1, 'Cultivos.fecha <=' => $fecha2));
    $cultivoUsuario =  TableRegistry::getTableLocator()->get('Cultivos')->find('all', $condit)->toArray();

    $html = '
        <br>
         <h3> Reporte de la Informacion de Cultivos entre Fechas </h3>
         <table cellspacing="0" cellpadding="1" border="1">
         <tr>
          <th> <b>Tipo de Cultivo</b> </th>
          <th> <b>Nombre</b> </th>
          <th> <b>Fecha</b> </th>
          <th> <b>Pez</b> </th>
          <th> <b>N° Peces</b> </th>
          <th> <b>Planta</b> </th>
          <th> <b>N° Plantas</b> </th>
         </tr>
         ';
    foreach ($cultivoUsuario  as $reg) {
      $html .= '
           <tr>
             <td> ' . $reg->tipo_cultivo . '</td>
             <td> ' . $reg->nombre . '</td>
             <td> ' . $reg->fecha . '</td>
             <td> ' . $reg->pez . '</td>
             <td> ' . $reg->cantidad_pez . '</td>
             <td> ' . $reg->planta . '</td>
             <td> ' . $reg->cantidad_planta . '</td>
            </tr>';
    }

    $html .= '</table>';
    $pdf->writeHTML($html, true, false, true, false, '');
    $pdf->lastPage();
    $pdf->Output('Listado_cultivos_fechas.pdf', 'I');
  }

  //--- Reporte del seguimiento de un cultivo ---
  public function seguimientocultivo($id = null)
  {
    require  ROOT . DS . 'vendor' . DS . 'tcpdf' . DS . 'Pdf.php';

    $pdf = new \Pdf();
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('SSCULTIVO');
    $pdf->SetTitle('Reporte Seguimiento de Cultivo');
    $pdf->SetSubject('Informe General');
    $pdf->SetKeywords('PDF, reportes');
    $pdf->SetMargins(10, 25.2, 10);
    $pdf->SetAutoPageBreak(TRUE, 13.4);
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);

    $pdf->AddPage('L', 'LETTER');
    $pdf->SetFont('times', '', 11, '', true);

    // Infomación del Cultivo Elegido
    $id_cultivo = $id; //Agregar id del cultivo como variable
    $condit = array('conditions' => array('Cultivos.id_cultivos' => $id_cultivo));
    $cultivoele =  TableRegistry::getTableLocator()->get('Cultivos')->find('all', $condit)->toArray();

    foreach ($cultivoele as $cul) {
      if ($cul->tipo_cultivo == 'Tierra') {
        // Extraemos todos los monitores de dicho cultivo terreste
        $condit1 = array('conditions' => array('MonitoreoTr.cultivos_id1' => $cul->id_cultivos));
        $monitoreos = TableRegistry::getTableLocator()->get('MonitoreoTr')->find('all', $condit1)->toArray();
        $html = '
            <br>
            <h3> Reporte del Seguimiento de un Cultivo </h3>
             <h4> <b>Tipo de Cultivo: </b>' . $cul->tipo_cultivo . '</h4>
             <h4> <b>Nombre: </b>' . $cul->nombre . '</h4>
             <h4> <b>Fecha del Cultivo: </b>' . $cul->fecha . '</h4>
             
             <table cellspacing="0" cellpadding="1" border="1">
             <tr>
              <th><b>Fecha</b></th>
              <th><b>Ph</b></th>
              <th><b>Humedad</b></th>
              <th><b>Nitrogeno</b></th>
              <th><b>Fosforo</b></th>
              <th><b>Potasio</b></th>
              <th><b>CO2</b></th>
              <th><b>Comentario</b></th>
             </tr>';
        foreach ($monitoreos  as $reg) {
          $html .= '
               <tr>
                 <td>' . $reg->fecha_TR . '</td>
                 <td>' . $reg->ph . '</td>
                 <td>' . $reg->humedad . '</td>
                 <td>' . $reg->nitrogeno . '</td>
                 <td>' . $reg->fosforo . '</td>
                 <td>' . $reg->potasio . '</td>
                 <td>' . $reg->dioxidoCB . '</td>
                 <td>' . $reg->comentario . '</td>
                </tr>';
        }
        $html .= '</table>';
      } else {
        // Extraemos todos los monitores de dicho cultivo acuaponico
        $condit1 = array('conditions' => array('MonitoreoAc.cultivos_id2' => $cul->id_cultivos));
        $monitoreos = TableRegistry::getTableLocator()->get('MonitoreoAc')->find('all', $condit1)->toArray();
        $html = '
             <h4> <b>Tipo de Cultivo: </b>' . $cul->tipo_cultivo . '</h4>
             <h4> <b>Nombre: </b>' . $cul->nombre . '</h4>
             <h4> <b>Fecha del Cultivo: </b>' . $cul->fecha . '</h4>
             <br> <br>
             <table cellspacing="0" cellpadding="1" border="1">
             <tr>
              <th><b>Fecha</b></th>
              <th><b>Ph</b></th>
              <th><b>Temperatura</b></th>
              <th><b>Nitrogeno</b></th>
              <th><b>Nitritos</b></th>
              <th><b>Oxigeno Disuelto</b></th>
              <th><b>Proteina</b></th>
              <th><b>Tiempo Crecimiento</b></th>
              <th><b>Exposicion Solar</b></th>
              <th><b>Comentario</b></th>
             </tr>';
        foreach ($monitoreos  as $reg) {
          echo $reg->nombre;
          $html .= '
               <tr>
                 <td>' . $reg->fecha_AC . '</td>
                 <td>' . $reg->ph . '</td>
                 <td>' . $reg->temperatura . '</td>
                 <td>' . $reg->nitrogeno . '</td>
                 <td>' . $reg->nitritos . '</td>
                 <td>' . $reg->oxigeno_disuelto . '</td>
                 <td>' . $reg->proteina_alimento . '</td>
                 <td>' . $reg->tiempo_crecimiento . '</td>
                 <td>' . $reg->exposicion_solar . '</td>
                 <td>' . $reg->comentario . '</td>
                </tr>';
        }
        $html .= '</table>';
      }
    }

    $pdf->writeHTML($html, true, false, true, false, '');
    $pdf->lastPage();
    $pdf->Output('Listado_cultivos_fechas.pdf', 'I');
  }

  //--- Reporte de los Insumos de un cultivo ---
  public function insumoscultivo($id = null)
  {
    require  ROOT . DS . 'vendor' . DS . 'tcpdf' . DS . 'Pdf.php';

    $pdf = new \Pdf();
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('SSCULTIVO');
    $pdf->SetTitle('Reporte Insumos de Cultivo');
    $pdf->SetSubject('Informe General');
    $pdf->SetKeywords('PDF, reportes');
    $pdf->SetMargins(10, 25.2, 10);
    $pdf->SetAutoPageBreak(TRUE, 13.4);
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);

    $pdf->AddPage('P', 'LETTER');
    $pdf->SetFont('times', '', 12, '', true);

    // Infomación de los Insumos del Cultivo Elegido
    $id_cultivo = $id; //Agregar id del cultivo como variable
    $condit = array('conditions' => array('Insumos.cultivos_id' => $id_cultivo));
    $insumos =  TableRegistry::getTableLocator()->get('Insumos')->find('all', $condit)->toArray();

    $html = '
              <br> <br>
             <table cellspacing="0" cellpadding="1" border="1">
             <tr>
              <th><b>Nombre</b></th>
              <th><b>Precio (c/u)</b></th>
              <th><b>Cantidad</b></th>
              <th><b>Precio Total</b></th>
             </tr>';
    foreach ($insumos  as $reg) {
      $html .= '
      <tr>
      <td>' . $reg->nombre . '</td>
      <td>' . $reg->precio_unitario . '</td>
      <td>' . ($reg->precio_total / $reg->precio_unitario) . '</td>
      <td>' . $reg->precio_total . '</td>
    </tr>';
    }
    $html .= '</table>';

    $pdf->writeHTML($html, true, false, true, false, '');
    $pdf->lastPage();
    $pdf->Output('Listado_insumos_cultivo.pdf', 'I');
  }

  //--- Reporte de insumos de dicho usuario ---
  public function insumosusuario($id = null)
  {
    require  ROOT . DS . 'vendor' . DS . 'tcpdf' . DS . 'Pdf.php';

    $pdf = new \Pdf();
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('SSCULTIVO');
    $pdf->SetTitle('Reporte Insumos de un Usuario');
    $pdf->SetSubject('Informe General');
    $pdf->SetKeywords('PDF, reportes');
    $pdf->SetMargins(10, 25.2, 10);
    $pdf->SetAutoPageBreak(TRUE, 13.4);
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    // add a page
    $pdf->AddPage('P', 'LETTER');
    $pdf->SetFont('times', '', 12, '', true);

    $id_usuario = $id;

    $insumosUsuario =  TableRegistry::getTableLocator()->get('Insumos')->find('all')->distinct()->join([
      'cultivos' => [
        'table' => 'Cultivos',
        'type' => 'INNER',
        'conditions' => 'Cultivos.id_cultivos = Insumos.cultivos_id'
      ],
      'usuarios' => [
        'table' => 'Usuarios',
        'type' => 'INNER',
        'conditions' => $id_usuario . ' = Cultivos.usuario_id'
      ]
    ])->toArray();

    $html = '
             <br> <br>
             <table cellspacing="0" cellpadding="1" border="1">
             <tr>
              <th> <b>Nombre</b></th>
              <th> <b>Precio (c/u)</b></th>
              <th> <b>Cantidad </b></th>
              <th> <b>Precio Total</b></th>
             </tr>';

    foreach ($insumosUsuario as $reg) {
      $html .= '
            <tr>
              <td>' . $reg->nombre . '</td>
              <td>' . $reg->precio_unitario . '</td>
              <td>' . ($reg->precio_total / $reg->precio_unitario) . '</td>
              <td>' . $reg->precio_total . '</td>
            </tr>';
    }

    $html .= '</table>';
    $pdf->writeHTML($html, true, false, true, false, '');
    $pdf->lastPage();
    $pdf->Output('Listado_insumos_usuario.pdf', 'I');
  }

  //--- Reporte de aquellos insumos que tengan un monto superior a 1.000.000 ---
  public function insumosmayores($id = null)
  {
    require  ROOT . DS . 'vendor' . DS . 'tcpdf' . DS . 'Pdf.php';

    $pdf = new \Pdf();
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('SSCULTIVO');
    $pdf->SetTitle('Reporte Insumos con monto mayor a 1.000.000');
    $pdf->SetSubject('Informe General');
    $pdf->SetKeywords('PDF, reportes');
    $pdf->SetMargins(10, 25.2, 10);
    $pdf->SetAutoPageBreak(TRUE, 13.4);
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    // add a page
    $pdf->AddPage('P', 'LETTER');
    $pdf->SetFont('times', '', 12, '', true);

    $id_usuario = $id;

    $insumosUsuario =  TableRegistry::getTableLocator()->get('Insumos')->find('all')->distinct()->join([
      'cultivos' => [
        'table' => 'Cultivos',
        'type' => 'INNER',
        'conditions' => 'Cultivos.id_cultivos = Insumos.cultivos_id'
      ],
      'usuarios' => [
        'table' => 'Usuarios',
        'type' => 'INNER',
        'conditions' => $id_usuario . ' = Cultivos.usuario_id'
      ]
    ])->toArray();

    $html = '
             <br> <br>
             <table cellspacing="0" cellpadding="1" border="1">
             <tr>
              <th> <b>Nombre</b></th>
              <th> <b>Precio (c/u)</b></th>
              <th> <b>Cantidad</b></th>
              <th> <b>Precio Total</b></th>
             </tr>';

    foreach ($insumosUsuario as $reg) {
      if ($reg->precio_total > 1000000) {
        $html .= '
            <tr>
              <td>' . $reg->nombre . '</td>
              <td>' . $reg->precio_unitario . '</td>
              <td>' . ($reg->precio_total / $reg->precio_unitario) . '</td>
              <td>' . $reg->precio_total . '</td>
            </tr>';
      }
    }

    $html .= '</table>';
    $pdf->writeHTML($html, true, false, true, false, '');
    $pdf->lastPage();
    $pdf->Output('Listado_insumos_mayores.pdf', 'I');
  }
}
