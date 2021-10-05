<?php 

namespace app\http\controllers;

use app\models\Dependencia;
use app\http\controllers\Controller;

class DependenciaController extends Controller
{
	public function index()
	{
		$this->view([
			'layout.header',
			'layout.menu',
			'dependencia.index',
			'layout.footer' 
		], 
		[
			'title' => 'Consultar Dependencias | Bienes Nacionales',
			'subtitle' => 'Consultar dependencias', 
			'style' => 'dependency'
		]);
	}

	public function get()
	{
		echo Dependencia::all();
	}

	public function create()
	{
		$this->view([
			'layout.header',
			'layout.menu',
			'dependencia.store',
			'layout.footer' 
		], 
		[
			'title' => 'Registrar Dependencias | Bienes Nacionales',
			'subtitle' => 'Registrar dependencias', 
			'style' => 'dependency'
		]);
	}

	public function store(array $data)
	{
		echo Dependencia::create($data);
	}

	public function destroy($id)
	{
		echo Dependencia::delete($id);
	}
}