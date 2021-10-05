<?php 

	require_once 'Vista/layout/header.php';
	require_once 'Vista/layout/menu.php';
?>

<main>
	<h1 class="h1">[@subtitle]</h1>
	<section class="section">
		<form id="registerdepForm" action="" method="POST" class="form" autocomplete="off">
			<div class="data-d">
				<div class="label">
					<label>Datos de la dependencia</label>
				</div>	
				<div class="codigo-dep">
					<label for="codigo-dep">Código</label>
					<input placeholder="Código de la dependencia" type="text" data-type="number" name="codigo_Depend" id="codigo_Depend" disabled>
				</div>		
				<div class="clasificacion-dep">
					<label for="clasificacion-dep">Clasificación</label>
					<select name="clasificacion_Depend" id="clasificacion-dep">
						<option value="">Unidad Administrativa - Académica</option>
						<option value="">Unidad Administrativa - Académica</option>
						<option value="">Unidad Administrativa - Académica</option>
					</select>
				</div>
				<div class="dependencia-dep">
					<label for="dependencia-dep">Dependencia</label>
					<input placeholder="Escriba el nombre de dependencia" type="text" data-type="string" name="nombre_Depend" id="dependencia-dep" required>
				</div>
				<div class="edificio-dep">
					<label for="edificio-dep">Edificio / Locación</label>
					<input placeholder="Escriba el nombre del edificio" type="text" data-type="string" name="locacion_Depend" id="edificio-dep" required>
				</div>
			</div>
			<div class="data-d">
				<div class="label2">
					<label>Datos del encargado de la dependencia</label>
				</div>	
				<div class="cedula-dep">
					<label for="cedula-dep">Cédula</label>
					<select name="cedula_Encarg" id="cedula_Encarg"></select>
				</div>
				<div class="chequeo-dep">
					<label for="chequeo-dep">Último Chequeo</label>
					<input type="date" name="fechacheq_Depend" data-type="date" id="chequeo-dep" required>
				</div>
			</div>
			<div class="data-d">
				<div class="label2">
					<label>Otros datos de la dependencia</label>
				</div>	
				<div class="observacion-dep">	
					<label for="observacion-dep">Observación</label>
					<textarea placeholder="Observaciones" name="observacion_Depend" id="observacion-dep"></textarea>
				</div>
				<div class="tomafisica-dep">
					<label for="tomafisica-dep">Toma Física</label>
					<input type="checkbox" value="Si" name="tomafisica_Depend" id="tomafisica-dep">
				</div>
				<div class="edicion-dep">
					<label for="edicion-dep">Edición y Transcripción</label>
					<input type="checkbox" value="Si" name="edicion_Depend" id="edicion-dep">
				</div>
				<div class="documentacion-dep">
					<label for="documentacion-dep">Documentación</label>
					<input type="checkbox" value="Si" name="documentacion_Depend" id="documentacion-dep">
				</div>
				
			</div>	
			<div class="btn-center">
				<input type="submit" class="btn save" value="Guardar" name="guardar" id="guardar">
				<input type="reset" class="btn save" value="Borrar" name="borrar" id="borrar">
			</div>
		</form>
	</section>
</main>
<script src="/js/dependencias.js"></script>
<?php 

	require_once 'Vista/layout/footer.php';
 ?>