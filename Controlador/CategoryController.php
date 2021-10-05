<?php 

namespace app\http\controllers;

use app\models\Category;
use app\models\ReporteCategory;
use app\http\controllers\Controller;

class CategoryController extends Controller
{
	public function index()
	{
		$this->view([
			'layout.header',
			'layout.menu',
			'category.index',
			'layout.footer' 
		], 
		[
			'title' => 'Categorias | Bienes Nacionales',
			'subtitle' => 'Categorias Sigecof', 
			'style' => 'categories'
		]);
	}

	public function get()
	{
		echo Category::all();
	}

	public function store(array $data)
	{
		echo Category::create($data);
	}

	public function delete($id)
	{
		echo Category::delete($id);
	}

	public function generate()
	{
		$categorias = Category::all();
		$pdf = new ReporteCategory('L','mm','legal');
		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->SetFont('Arial', '', 11);

		$categorias = json_decode($categorias, true);

		foreach ($categorias as $categoria)
		{
			$pdf->Cell(84, 8, $categoria['codigo_Categoria'], 1, 0, 'C', 0);
			$pdf->Cell(84, 8, $categoria['presupuesto_Categoria'], 1, 0, 'C', 0);
			$pdf->Cell(84, 8, $categoria['clasificacion_Categoria'], 1, 0, 'C', 0);
			$pdf->Cell(84, 8, $categoria['denominacion_Categoria'], 1, 1, 'C', 0);
		}

		$pdf->Output('I', 'Listadodecategorias.pdf');
	}
}