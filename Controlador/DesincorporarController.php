<?php 

namespace app\http\controllers;

use app\models\Desincorporar;
use app\models\Incorporar;
use app\http\controllers\Controller;

class DesincorporarController extends Controller
{
	public function index()
	{
		$this->view([
			'layout.header',
			'layout.menu',
			'bien.desincorporar',
			'layout.footer' 
		], 
		[
			'title' => 'Desincorporar Bienes | Bienes Nacionales',
			'subtitle' => 'Desincorporar bienes', 
			'style' => 'desincorporar'
		]);
	}

	public function store(array $data)
	{
		Incorporar::destroy($data['codigo_Bienes'], 'codigo_Bienes');
		echo Desincorporar::create($data);
	}

	public function get()
	{
		echo Desincorporar::all();
	}
}