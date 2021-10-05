<?php 

namespace app\http\controllers;

use app\models\Bien;
use app\http\controllers\Controller;

class BienController extends Controller
{
	public function index()
	{
		$this->view([
			'layout.header',
			'layout.menu',
			'bien.index',
			'layout.footer' 
		], 
		[
			'title' => 'Consultar | Bienes Nacionales',
			'subtitle' => 'Consultar bienes', 
			'style' => 'bienes'
		]);
	}

	public function find($id)
	{
		echo Bien::find($id);
	}

	public function get()
	{
		echo Bien::all();
	}

	public function not()
	{
		echo Bien::not();
	}

	public function create()
	{
		$this->view([
			'layout.header',
			'layout.menu',
			'bien.store',
			'layout.footer' 
		], 
		[
			'title' => 'Registrar bienes | Bienes Nacionales',
			'subtitle' => 'Registrar bienes', 
			'style' => 'registrarbienes'
		]);
	}

	public function store(array $data)
	{
		echo Bien::create($data);
	}

	public function update(array $data)
	{
		echo Bien::update($data);
	}

	public function destroy($id)
	{
		echo Bien::delete($id);
	}
}