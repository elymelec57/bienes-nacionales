<?php 

namespace app\http\controllers;

use app\http\controllers\Controller;

class ErrorController extends Controller
{
	public function error404()
	{
		$this->view(['layout.head', 'error.404'], 
			[
				'title' => 'Error 404', 
				'subtitle' => 'Pagina No Encontrada',
				'style' => 'err404'
			]);
	}
}