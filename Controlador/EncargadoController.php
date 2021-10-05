<?php 

namespace app\http\controllers;

use app\models\Encargado;
use app\models\ReporteEncargado;
use app\http\controllers\Controller;

class EncargadoController extends Controller
{
	public function index()
	{
		$this->view([
			'layout.header',
			'layout.menu',
			'encargado.index',
			'layout.footer' 
		], 
		[
			'title' => 'Encargados | Bienes Nacionales',
			'subtitle' => 'Encargados', 
			'style' => 'encargado'
		]);
	}

	public function get()
	{
		echo Encargado::all();
	}

	public function store(array $data)
	{
		echo Encargado::create($data);
	}

	public function delete($id)
	{
		echo Encargado::delete($id);
	}

	public function generate()
	{
		$encargados = Encargado::all();
		$pdf = new ReporteEncargado('L','mm','legal');
		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->SetFont('Arial', '', 11);

		$encargados = json_decode($encargados, true);

		foreach ($encargados as $encargado)
		{
			$pdf->Cell(67, 8, $encargado['nombre_Encarg'], 1, 0, 'C', 0);
			$pdf->Cell(67, 8, $encargado['apellido_Encarg'], 1, 0, 'C', 0);
			$pdf->Cell(67, 8, $encargado['cargo_Encarg'], 1, 0, 'C', 0);
			$pdf->Cell(67, 8, $encargado['cedula_Encarg'], 1, 0, 'C', 0);
			$pdf->Cell(67, 8, $encargado['telefono_Encarg'], 1, 1, 'C', 0);
		}

		$pdf->Output('I', 'Listadodeencargados.pdf');
	}
}