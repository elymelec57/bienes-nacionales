<?php 

namespace app\http\controllers;

use app\models\Bien;
use app\models\ReporteBienes;
use app\http\controllers\Controller;

class ReporteBienesController extends Controller
{
	public function index()
	{
		$this->view([
			'layout.header',
			'layout.menu',
			'reporte.index',
			'layout.footer' 
		], 
		[
			'title' => 'Reportes | Bienes Nacionales',
			'subtitle' => 'Consultar reportes', 
			'style' => 'reports'
		]);
	}

	public function generate()
	{
		$bienes = Bien::all();
		$pdf = new ReporteBienes('L','mm','legal');
		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->SetFont('Arial', '', 11);

		$bienes = json_decode($bienes, true);

		foreach ($bienes as $bien)
		{
			$pdf->Cell(30, 8, $bien['codigo_Categoria'], 1, 0, 'C', 0);
			$pdf->Cell(30, 8, $bien['codigo_Bienes'], 1, 0, 'C', 0);
			$pdf->Cell(67, 8, $bien['nombre_Bienes'], 1, 0, '', 0);
			$pdf->Cell(180, 8, $bien['descripcion_Bienes'], 1,);
			$pdf->Cell(32, 8, $bien['conservacion_Bienes'], 1, 1, 'C', 0);
		}

		$pdf->Output('I', 'Listadodebienes.pdf');
	}
}