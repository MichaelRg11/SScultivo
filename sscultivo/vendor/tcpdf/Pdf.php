<?php 
require  ROOT . DS . 'vendor' . DS . 'tcpdf'. DS .'tcpdf.php';
class Pdf extends TCPDF
{
    function __construct()
    {
        parent::__construct();
        mb_internal_encoding('UTF-8');
    }
    public function Header() {
        
        // logo debe estar en webroot/img
        $image_file = WWW_ROOT.'img'.DS.'logo_ssc.png';
        
        // Set font
        $this->SetFont('helvetica', 'B', 11);
        // Title
        $this->Cell(0, 5, 'SISTEMA DE SEGUIMIENTO DE CULTIVOS', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        $this->SetFont('helvetica', 'I', 10);
        $this->Ln();//Salto de linea
        $this->Cell(0, 5, 'BARRANQUILLA - ATLANTICO', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        $this->Ln();//Salto de linea
        $this->Cell(0, 5, 'TEL: (+57)3103627097', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        $this->Image($image_file, 10, 9, 50, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $user='sscultivo';
        $fecha=date('d-m-Y H:i');
        $texto='Fecha de impresión:'.$fecha.' impreso por '.$user;
        $this->Cell(0, 10, $texto.' Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }

}//end class
/* application/libraries/Pdf.php */
?>