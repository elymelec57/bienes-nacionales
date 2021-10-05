<?php 

namespace app\http\controllers;

use vendor\middlewares\Auth;
use app\http\controllers\Controller;

class AuthController extends Controller
{

	public function index()
	{
		$this->view(['layout.head', 'auth.index'], 
			[
				'title' => 'Bienes Nacionales | UPTAEB', 
				'subtitle' => 'Bienes Nacionales',
				'style' => 'login'
			]);
	}

	public function login(array $credentials)
	{
		Auth::attempt($credentials);
	}

}