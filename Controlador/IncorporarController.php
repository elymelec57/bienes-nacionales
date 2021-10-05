<?php 

namespace app\http\controllers;

use app\models\Incorporar;
use app\models\ReporteIncorporar;
use app\http\controllers\Controller;

class IncorporarController extends Controller
{
	public function index()
	{
		$this->view([
			'layout.header',
			'layout.menu',
			'bien.incorporar',
			'layout.footer' 
		], 
		[
			'title' => 'Incorporar Bienes | Bienes Nacionales',
			'subtitle' => 'Incorporar bienes', 
			'style' => 'incorporarbienes'
		]);
	}

	public function store(array $data)
	{
		echo Incorporar::create($data);
	}

	public function get()
	{
		echo Incorporar::all();
	}

	public function where($id)
	{
		echo Incorporar::where($id);
	}

	public function generate()
	{
		$incorporaciones = Incorporar::all();
		$pdf = new ReporteIncorporar('L','mm','legal');
		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->SetFont('Arial', '', 11);

		$incorporaciones = json_decode($incorporaciones, true);

		foreach ($incorporaciones as $incorporado)
		{
			$pdf->Cell(67, 8, $incorporado['num_Movincorp'], 1, 0, 'C', 0);
			$pdf->Cell(67, 8, $incorporado['codigo_Depend'], 1, 0, 'C', 0);
			$pdf->Cell(67, 8, $incorporado['codigo_Bienes'], 1, 0, 'C', 0);
			$pdf->Cell(67, 8, $incorporado['cedula_Encarg'], 1, 0, 'C', 0);
			$pdf->Cell(67, 8, $incorporado['fecha_Incorp'], 1, 1, 'C', 0);
		}

		$pdf->Output('I', 'Listadodeincorporaciones.pdf');
	}
}