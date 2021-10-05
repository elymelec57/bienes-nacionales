<?php 

namespace app\models;

use vendor\FPDF\FPDF;

class ReporteBienes extends FPDF
{
	function Header()
	{
		$this->Image('img/8.jpg',6,4,345,15, 'jpg');
		$this->SetFont('Arial','BI', 13);
		$this->Ln(18);
		$this->Cell(0,0,utf8_decode('INVENTARIO FÍSICO DE BIENES NACIONALES'),0,0,'C');
		$this->Ln(8);
		$this->SetFont('Arial','B',	12);
		$this->Cell(30, 8,utf8_decode('Catálogo'), 1, 0, 'C', 0);
		$this->Cell(30, 8,utf8_decode('Código'), 1, 0, 'C', 0);
		$this->Cell(67, 8, 'Nombre', 1, 0, 'C', 0);
		$this->Cell(180, 8,utf8_decode('Descripción'), 1, 0, 'C', 0);
		$this->Cell(32, 8, 'Estado', 1, 0, 'C', 0);
		$this->Ln(8);
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