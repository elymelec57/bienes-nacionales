<?php 

namespace app\http\controllers;

use app\http\controllers\Controller;

class HelpController extends Controller
{
	public function index()
	{
		$this->view([
			'layout.header', 
			'layout.menu', 'help.index', 
			'layout.footer'
		], 
		[
			'title' => 'Ayuda | Bienes Nacionales', 
			'subtitle' => 'Manual de ayuda', 
			'style' => 'help'
		]);
	}
}