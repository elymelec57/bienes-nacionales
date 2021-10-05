<?php 
  
 // require_once 'Vista/modulos/head.php';
 // require_once 'Vista/modulos/vista-menusuperadministrador.php';

 ?>

  <h2 class="container display-4 text-center mt-5">
        <div class="row justify-content-center">
            <div class="col-xm-12 mt-4">
                <img class="img-fluid" src="Vista/img/riesgocero2.jpeg">
            </div>
        </div>
  </h2>
 
  <div class="container mt-2">
    <div class="row mb-3 justify-content-center">
      <div class="col-xm-12 col-sm-4 col-md-4 col-lg-4 text-center ">
            <select id="paises" name="paises" class="form-control">
                
          </select>
      </div> 
    </div>

    <div class="row justify-content-center">
      <label class="col-xm-4 col-sm-4 col-md-4 col-lg-4 text-center"><p class="casilla pt-2 pb-2">Tasa de Cambio</p>
            <input type="" value="" id="taza" class="form-control">
      </label> 

      <label class="col-xm-4 col-sm-4 col-md-4 col-lg-4 text-center"><p class="casilla pt-2 pb-2">Precio del dolar</p>
            <input type="text" id="precio" class="form-control">
      </label>
    </div>

  <form class="container mb-5 mt-3" id="formulario">

    <div class="row justify-content-center mb-2">

        <div class="col-md-3 col-lg-3">
            <p class="casilla pt-2 pb-2 text-center">Si se envian: </p>
        </div>

        <div class="col-md-3 col-lg-2">
            <input class="form-control mr-2"  type="number" id="envio"> 
        </div>

        <div class="col-md-3 col-lg-3">
          <p class=" casilla pt-2 pb-2 text-center" id="nombrem"></p>
        </div>

    </div><!--PRIMERA FILA-->

    <div class="row justify-content-center mb-2">
        <div class="col-md-3 col-lg-3">
            <p class="casilla pt-2 pb-2 text-center">Se Reciben: </p>
        </div>

        <div class="col-md-3 col-lg-2">
            <input class=" form-control mr-2" value=""  type="text" id="bolivares"> 
        </div>

        <div class="col-md-3 col-lg-3">
          <p class="casilla pt-2 pb-2 text-center">Bolivares </p>
        </div>
    </div>

   <!-- </div><SEGUNDA FILA-->

    <div class="row justify-content-center mb-2">

        <div class="col-md-3 col-lg-3">
            <p class="casilla pt-2 pb-2 text-center">O si prefieres: </p>
        </div>

        <div class="col-md-3 col-lg-2">
            <input class=" form-control mr-2"  type="text"  name="nombreh" id="dolaresefectivo" class="form-control"> 
        </div>

        <div class="col-md-3 col-lg-3">
          <p class="casilla pt-2 pb-2 text-center">Dolares en efectivo </p>
        </div>

    </div><!--TERCERA FILA-->

  </form>

  </div>
  </div>

<?php 

  //require_once 'Vista/modulos/footer.php';
?>
