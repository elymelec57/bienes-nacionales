<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Bienes nacionales UPTAEB">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Hector Cortez">
  <meta name="theme-color" content="#5995fd">
  <link rel="shortcut icon" href="Vista/img/5.png">
  <title>Bienes Nacionales</title>
  <link rel="stylesheet" href="Vista/css/main.css">
  <link rel="stylesheet" href="Vista/css/header.css">
  <link rel="stylesheet" href="Vista/css/aside.css">
  <link rel="stylesheet" href="Vista/css/[@style].css">
  <script src="Vista/js/jquery-3.5.1.min.js"></script>
  <script src="Vista/js/validator.js"></script>
</head>
<body>
<header class="header">
<div class="bars">
    <i class="fa fa-bars" id="toggle-menu"></i>
  </div>
  <a href="/inicio">
    <img alt="Logo" class="logo-header" src="Vista/img/5.png">
  </a>
 <div class="search">
    <input type="text" placeholder="Buscar">
    <i tabindex="0" class="fa fa-search" title="Buscar"></i>
  </div>
  <div class="profile" onclick="profilePopup()">  
    <a tabindex="0" id="text-profile" title="Cuenta">
      <i class="fa fa-user i-hidde"></i>
      <h3 class="p-hidde">Perfil</h3>
      <i class="fa fa-caret-down"></i>
    </a>
  </div>
</header>
<div id="profile-popup" class="profile-popup">
  <a href="/ayuda">
    <i class="fa fa-info-circle"></i>
    <h4>Manual (ayuda)</h4>
  </a>
  <a class="mod" id="switch">
    <button class="switch">
      <i class="fa fa-toggle-off" id="on"></i>
    </button>
    <h4>Tema</h4>
  </a>
  <div class="divider"></div>
  <a href="/logout">
    <i class="fa fa-sign-out-alt"></i>
    <h4>Cerrar sesión</h4> 
  </a>
</div>