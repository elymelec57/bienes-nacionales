<?php 

	require_once 'Vista/layout/header.php';
	require_once 'Vista/layout/menu.php';
?>

<main>
	<div class="btn-cate">
		<h1 class="h1">[@subtitle]</h1>
		<button class="btn add" id="modal-cat">Agregarsss</button>
	</div> 
	<section class="section">
		<div class="table-elements">
			<div class="elements">
				<h2 class="h1">Todos los registros</h2>
			</div>
		</div>
		<div class="table-scroll">
			<table>
				<thead>
					<tr>
						<th>Código</th>
						<th>Presupuestaria</th>
						<th>Clasificación</th>
						<th>Denominación</th>
						<th>Opción</th>
					</tr>
				</thead>
				<tbody id="el">	
				</tbody>
			</table>
		</div>
	</section>
</main>

<div id="modal-category" class="modal">
  <div class="modal-content register-cat">
  	<h2 class="h1">Registrar categorías</h2>
    <form id="catForm" action="" method="POST" autocomplete="off">
    	<div>
    		<label for="category-reg">Código</label>
				<input type="text" placeholder="Código de la categoría" data-type="number" name="codigo_Categoria" id="category-reg" required> 
			</div>
			<div>
				<label for="presupuestaria-reg">Presupuestaria</label>
				<input type="text" placeholder="Presupuestaria de la categoría" data-type="number" name="presupuesto_Categoria" id="presupuestaria-reg" required>
			</div>
			<div>
				<label for="clasificacion-reg">Clasificación</label>
				<input type="text" placeholder="Clasificación de la categoría" data-type="string" name="clasificacion_Categoria" id="clasificacion-reg" required>
			</div>
			<div>
				<label for="denominacion-reg">Denominación</label>
				<input type="text" placeholder="Denominación de la categoría" data-type="string" name="denominacion_Categoria" id="denominacion-reg" required>
			</div>
			<div class="btn-categoria">
				<input class="btn ad guardar" type="submit" value="Guardar">
				<a class="btn add cancel" id="close-category">Cancelar</a>
			</div>
		</form>
  </div>
</div>

<script src="Vista/js/category.js"></script>	

<?php 

	require_once 'Vista/layout/footer.php';
 ?>