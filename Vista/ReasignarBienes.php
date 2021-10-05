<?php 

	require_once 'Vista/layout/header.php';
	require_once 'Vista/layout/menu.php';
?>

<main>
	<h1 class="h1">Reasignar bienes</h1>
	<section class="section">
		<form id="reactForm" action="#" method="#" class="form">
			<div class="mov-reasig">
				<label for="mov-reasig">Movimiento</label>
				<input placeholder="Número de M." type="text" name="mov-reasig" id="mov-reasig">
			</div>
			<div class="carga-descarga">
				<label for="carga-descarga">Tipo</label>
				<input placeholder="Tipo de reasignación" type="text" name="carga-descarga" id="carga-descarga" data-type="string" required>
			</div>
			<div class="fecha-reasig">
				<label for="fecha-reasig">Fecha</label>
				<input type="date" name="fecha-reasig" id="fecha-reasig" data-type="date" required>
			</div>
			<div class="concept-reasig">
				<label for="concept-reasig">Concepto</label>
				<input placeholder="Concepto" type="text" name="concept-reasig" id="concept-reasig" data-type="string" required>
			</div>
			<div class="nuevadep-reasig">
				<label for="nuevadep-reasig">Actual Dependencia</label>
				<select name="codigo_Depend" id="nuevadep-reasig"></select>
			</div>
			<div class="code-bien">
				<label for="code-bien">Bien nacional</label>
				<select name="codigo_Bienes" id="code-bien"></select>
			</div>
			<div class="viejadep-reasig">
				<label for="viejadep-reasig">Nueva Dependencia</label>
				<select name="codigo_Depend" id="viejadep-reasig"></select>
			</div>
			<div class="btn-center">
				<input type="submit" class="btn save" value="Reasignar" name="guardar" id="guardar">
				<input type="reset" class="btn save" value="Borrar" name="borrar" id="borrar">
			</div>
		</form>
	</section>
</main>
<script src="/js/reasignar.js"></script>

<?php 

	require_once 'Vista/layout/footer.php';
 ?>