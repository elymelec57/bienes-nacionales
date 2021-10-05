<?php 

namespace app\models;

use vendor\FPDF\FPDF;

class ReporteEncargado extends FPDF
{
	function Header()
	{
		$this->Image('img/8.jpg',6,4,345,15, 'jpg');
		$this->SetFont('Arial','BI', 13);
		$this->Ln(18);
		$this->Cell(0,0,utf8_decode('LISTADO DE AUTORIDADES'),0,0,'C');
		$this->Ln(8);
		$this->SetFont('Arial','B',	12);
		$this->Cell(67, 8,utf8_decode('Nombre'), 1, 0, 'C', 0);
		$this->Cell(67, 8,utf8_decode('Apellido'), 1, 0, 'C', 0);
		$this->Cell(67, 8,utf8_decode('Cargo'), 1, 0, 'C', 0);
		$this->Cell(67, 8,utf8_decode('Cédula'), 1, 0, 'C', 0);
		$this->Cell(67, 8,utf8_decode('Teléfono'), 1, 0, 'C', 0);
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