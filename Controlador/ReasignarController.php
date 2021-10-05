<?php 

namespace app\http\controllers;

use app\models\Reasignar;
use app\http\controllers\Controller;

class ReasignarController extends Controller
{
	public function index()
	{
		$this->view([
			'layout.header',
			'layout.menu',
			'reasignar.index',
			'layout.footer' 
		], 
		[
			'title' => 'Reasignar Bienes | Bienes Nacionales',
			'subtitle' => 'Reasignar Bienes', 
			'style' => 'reasignar'
		]);
	}
}