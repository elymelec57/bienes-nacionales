<?php 

	require_once 'Vista/layout/header.php';
	require_once 'Vista/layout/menu.php';
?>

<main>
	<div class="btn-cate">
		<h1 class="h1">[@subtitle]</h1>
		<button class="btn add" id="btn-encargado">Agregar</button>
	</div>
	<section class="section">
		<div class="table-elements">
			<div class="elements">
				<h2 class="h1">Todos los registros</h2>
				<!-- <select>
					<option value="10">10</option>
					<option value="20">20</option>
					<option value="all">All</option>
				</select> 
				<h2 class="h1">registros</h2> -->
			</div>
		</div>
		<div class="table-scroll">
			<table>
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Cargo</th>
						<th>Cédula</th>
						<th>Teléfono</th>
						<th>Opción</th>
					</tr>
				</thead>
				<tbody id="el">	
				</tbody>
			</table>
		</div>
	</section>
</main>

<div id="modal-encargado" class="modal">
	<div class="modal-content encargados">
	  	<h2 class="h1">Registrar encargados</h2>
	    <form id="encarForm" action="" method="POST" autocomplete="off">
    		<div>
    			<label for="nombre-encargado">Nombre</label>
				<input type="text" placeholder="Escriba el nombre" data-type="string" name="nombre_Encarg" id="nombre-encargado" required> 
			</div>
			<div>
				<label for="apellido-encargado">Apellido</label>
				<input type="text" placeholder="Escriba el apellido" data-type="string" name="apellido_Encarg" id="apellido-encargado" required>
			</div>
			<div>
				<label for="cargo-encargado">Cargo</label>
				<input type="text" placeholder="Escriba el cargo actual" data-type="string" name="cargo_Encarg" id="cargo-encargado" required>
			</div>
			<div>
				<label for="cedula-encargado">Cédula</label>
				<input type="text" placeholder="Escriba la cédula" data-type="number" name="cedula_Encarg" id="cedula-encargado" required>
			</div>
			<div>
				<label for="telefono-encargado">Teléfono</label>
				<input type="text" placeholder="Escriba la teléfono" data-type="number" name="telefono_Encarg" id="telefono-encargado" required>
			</div>
			<div class="btn-categoria">
				<input class="btn add guardar" type="submit" value="Guardar">
				<a class="btn add cancel" id="close-encargado">Cancelar</a>
			</div>
		</form>
	</div>
</div>
<script src="Vista/js/encargado.js"></script>
<?php 

	require_once 'Vista/layout/footer.php';
 ?>