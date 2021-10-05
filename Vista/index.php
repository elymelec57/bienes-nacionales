<?php 

  require_once 'Vista/layout/head.php';
  //require_once 'Vista/layout/header.php';
?>

<div class="container">
  <div class="forms-container">
    <div class="signin-signup">

      <form id="loginForm" action="#" method="POST" class="login sign-in-form" autocomplete="off">
        <h2 class="title-login">Bienvenido(a)</h2>
        <div class="input-field">
          <i class="fas fa-user"></i>
          <input type="text" id="usuario_Encarg" data-type="user" name="usuario_Encarg" placeholder="Usuario">
        </div>
        <div class="input-field">
          <i class="fas fa-lock"></i>
          <input type="password" id="clave_Encarg" data-type="password" name="clave_Encarg" autocomplete="off" placeholder="Contraseña">
        </div>
        <div class="password-hide">
          <input type="checkbox" id="mostrar" name="mostrar">
          <label for="mostrar">Mostrar contraseña</label>
        </div>
        <input type="submit" value="Entrar" class="btn">
        <p class="password-text">
      </form>
    </div>
  </div>
  <div class="logo-login">
    <img src="Vista/img/1.png">
  </div>
  <div class="panels-container">
    <div class="panel left-panel">
      <div class="content">
        <h3>[@subtitle]</h3>
        <p>Universidad Politécnica Territorial del Estado Lara "Andrés Eloy Blanco" (UPTAEB)</p>
      </div>
      <img src="Vista/img/2.svg" class="image-login" alt="Imagen">
    </div>
  </div>
</div>
<script src="/js/sweetalert2.all.min.js"></script>
<script src="/js/jquery-3.5.1.min.js"></script>
<script src="/js/login.js"></script>
</body>
</html>