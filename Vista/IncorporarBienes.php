<?php 

	require_once 'Vista/layout/header.php';
	require_once 'Vista/layout/menu.php';
?>

<main>
	<h1 class="h1">[@subtitle]</h1>
	<section class="section">
		<form id="incorporarForm" action="#" method="#" class="form">
			<div class="num_Movincorp">
				<label for="num_Movincorp">Movimiento</label>
				<input placeholder="Número de movimiento" type="text" data-type="number" name="num_Movincorp" id="num_Movincorp" disabled>
			</div>
			<div class="fecha-incorp">
				<label for="fecha-incorp">Fecha</label>
				<input type="date" name="fecha_Incorp" data-type="date" id="fecha_Incorp" required>
			</div>
			<div class="numacta_Incorp">
				<label for="numacta_Incorp">Acta</label>
				<input placeholder="Número de acta" type="text" data-type="number" name="numacta_Incorp" id="numacta_Incorp" required>
			</div>
			<div class="prestamo_Incorp">
				<label for="prestamo_Incorp">Préstamo</label>
				<input placeholder="Préstamo" type="text" data-type="string" name="prestamo_Incorp" id="prestamo_Incorp" required>
			</div>
			<div class="codigo_Bienes">
				<label for="codigo_Bienes">Código del Bien</label>
				<select name="codigo_Bienes" id="codigo_Bienes"></select>
			</div>
			<div class="data-d">
				<div class="label2">
					<label>Datos de Ubicación</label>
				</div>
				<div class="codigo_Depend">
					<label for="codigo_Depend">Código de la dependencia</label>
					<select name="codigo_Depend" id="codigo_Depend"></select>
				</div>
				<div class="cedula_Encarg">
					<label for="cedula_Encarg">Responsable por uso</label>
					<select name="cedula_Encarg" id="cedula_Encarg"></select>
					</div>
				</div>
			</div>
			<div class="btn-center">
				<input type="submit" class="btn save" value="Guardar" name="guardar" id="guardar">
				<input type="reset" class="btn save" value="Borrar" name="borrar" id="borrar">
			</div>
		</form>
	</section>
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
						<th title="Número de movimiento">Movimiento</th>
						<th title="Código de la dependencia">Dependencia</th>
						<th title="Código del bien">C. Bien</th>
						<th title="Cédula del responsable">Responsable</th>
						<th title="Fecha de incorporación">Fecha</th>
					</tr>
				</thead>
				<tbody id="el">	
				</tbody>
			</table>
		</div>
	</section>
</main>
<script src="/js/incorporar.js"></script>

<?php 

	require_once 'Vista/layout/footer.php';
 ?>