<?php

  require_once 'Controlador/vistaControlador.php';

  $plantilla = new vistaControlador();
  //$plantilla->obtenerPlantillaControlador();
  $vista = $plantilla->obtenerVistaControlador();

  if ($vista == "index") {

  	require_once 'Vista/index.php';
 
  }else{ 
   
  session_start();
  require_once $vista;
  }
  
?> 