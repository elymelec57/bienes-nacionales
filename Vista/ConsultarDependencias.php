<?php 

	require_once 'Vista/layout/header.php';
	require_once 'Vista/layout/menu.php';
?>

<main>
	<h1 class="h1">[@subtitle]</h1>
	<section class="section">
		<div class="table-elements">
			<div class="elements">
				<h2 class="h1">Todos los registros</h2>
			</div>
		</div>
		<div class="table-scroll">
			<table class="consult-dep">
				<thead>
					<tr>
						<th>Código</th>
						<th>Clasificación</th>
						<th>Dependencia</th>
						<th>Edificio</th>
						<th>Observaciones</th>
						<th title="Toma física">T.F</th>
						<th title="Edición y transcripción">E.T</th>
						<th title="Documentación">Doc</th>
						<th title="Ultimo chequeo">F.Chequeo</th>
						<th title="Cédula encargado">Encargado</th>
						<th>Opción</th>
					</tr>
				</thead>
				<tbody id="el">
				</tbody>
			</table>
		</div>
	</section>
</main>
<script src="/js/dependencias.js"></script>

<?php 

	require_once 'Vista/layout/footer.php';
 ?>