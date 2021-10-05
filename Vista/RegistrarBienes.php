<?php 

	require_once 'Vista/layout/header.php';
	require_once 'Vista/layout/menu.php';
?>

<main>
	<h1 class="h1" id="title_change">[@subtitle]</h1>
	<section class="section">
		<form action="" method="POST" id="fileForm" class="form" autocomplete="off">
			<div class="data-d">
				<div class="label">
					<label>Descripción del bien</label>
				</div>
				<div class="code-act-ficha">
					<label for="code-act-ficha">Código del bien</label>
					<input placeholder="Escriba el código del bien" type="text" data-type="number" name="codigo_Bienes" id="codigo_Bienes" required>
				</div>
				<div class="code-hist-ficha">
					<label for="code-hist-ficha">Código histórico</label>
					<input placeholder="Escriba el código histórico" type="text" name="codhistorico_Bienes" data-type="number" id="codhistorico_Bienes" required>
				</div>
				<div class="categoria-ficha">
					<label for="categoria-ficha">Cat. Sigecof</label>
					<select name="codigo_Categoria" id="codigo_Categoria">
					</select>
				</div>
				<div class="type-bien-incorp">
					<label for="type-bien-incorp">Tipo de bien</label>
					<input placeholder="Tipo de bien" type="text" name="tipo_Bienes" id="tipo_Bienes" data-type="string" required>
				</div>
				<div class="name-bien-incorp">
					<label for="name-bien-incorp">Nombre</label>
					<input placeholder="Nombre del bien" type="text" name="nombre_Bienes" id="nombre_Bienes" data-type="string" required>
				</div>
				<div class="descripcion-ficha">
					<label for="descripcion-ficha">Descripción</label>
					<textarea placeholder="Escriba la descripción del bien nacional" name="descripcion_Bienes" id="descripcion_Bienes" required></textarea>
				</div>	
				<div class="label2">
					<label>Estado del bien</label>
				</div>
				<div class="fechacheq_Bienes">
					<label for="fechacheq_Bienes">Chequeo</label>
					<input type="date" name="fechacheq_Bienes" id="fechacheq_Bienes" data-type="date" required>
				</div>
				<div class="conservacion_Bienes">
					<label for="conservacion_Bienes">Conservación</label>
					<input placeholder="Estado de conservación del bien" type="text" name="conservacion_Bienes" id="conservacion_Bienes" data-type="string" required>
				</div>
			</div>
			<div class="btn-center">
					<input type="submit" class="btn save" value="Guardar" name="guardar" id="guardar-dep">
					<input type="reset" class="btn save" value="Borrar" name="borrar" id="borrar-dep">
			</div>				
		</form>
	</section>
</main>
<script src="/js/bienes.js"></script>

<?php 

	require_once 'Vista/layout/footer.php';
 ?>