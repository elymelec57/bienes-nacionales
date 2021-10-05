<?php 

namespace app\http\controllers;

use app\http\controllers\Controller;

class HomeController extends Controller
{
	public function index()
	{
		$this->view([
			'layout.header', 
			'layout.menu', 'home.index', 
			'layout.footer'
		], 
		[
			'title' => 'Inicio | Bienes Nacionales', 
			'subtitle' => 'Bienvenido(a) al sistema', 
			'style' => 'home'
		]);
	}
}