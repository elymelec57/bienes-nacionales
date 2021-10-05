<?php

	class vistaModelo{
		protected function optenerVistaModelo($url){
			if (is_file("Vista/".$url.".php")) {

				 $contenido = "Vista/".$url.".php";

			}else if(is_file("Controlador/".$url.".php")){

				$contenido = "Controlador/".$url.".php";
			}
			else if(!is_file("Vista/".$url.".php") && !is_file("Controlador/".$url.".php")){

				$contenido = "Vista/404.php";
 
			}
		   
			return $contenido;
		}
	}