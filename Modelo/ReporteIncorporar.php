<?php 

namespace app\models;

use vendor\FPDF\FPDF;

class ReporteIncorporar extends FPDF
{
	function Header()
	{
		$this->Image('img/8.jpg',6,4,345,15, 'jpg');
		$this->SetFont('Arial','BI', 13);
		$this->Ln(18);
		$this->Cell(0,0,utf8_decode('LISTADO DE INCORPORACIONES'),0,0,'C');
		$this->Ln(8);
		$this->SetFont('Arial','B',	12);
		$this->Cell(67, 8,utf8_decode('Num. Movimiento'), 1, 0, 'C', 0);
		$this->Cell(67, 8,utf8_decode('Codigo Dependencia'), 1, 0, 'C', 0);
		$this->Cell(67, 8,utf8_decode('Codigo Bien'), 1, 0, 'C', 0);
		$this->Cell(67, 8,utf8_decode('Responsable por uso'), 1, 0, 'C', 0);
		$this->Cell(67, 8,utf8_decode('Fecha'), 1, 1, 'C', 0);
	}

	function Footer()
	{
    // Posición: a 1,5 cm del final
    $this->SetY(-10);
    // Arial italic 8
    $this->SetFont('Arial','I',9);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'L');
    $this->Cell(0,10,utf8_decode('UNIDAD DE BIENES NACIONALES - UPTAEB'),0,0,'R');
	}
}