<?php 

	require_once 'Vista/layout/header.php';
	require_once 'Vista/layout/menu.php';
?>

<main>
	<h1 class="h1">[@subtitle]</h1>
	<section class="section">
		<form id="desincorForm"  action="" method="POST" class="form">
			<div class="area-desinc">
				<label for="area-desinc">Movimiento</label>
				<input placeholder="Número de movimiento" type="text" name="mov-desinc" id="mov_Desincorp" disabled>
			</div>
			<div class="act-desinc">
				<label for="act-desinc">Acta</label>
				<input placeholder="Numero de acta" type="text" name="acta_Desincorp" id="acta_Desincorp" data-type="number" required>
			</div>
			<div class="date-desinc">
				<label for="date-desinc">Fecha</label>
				<input placeholder="Fecha de acta" type="date" name="fecha_Desincorp" id="fecha_Desincorp" data-type="date" required>
			</div>
			<div class="depend-desinc">
				<label for="depend-desinc">Dependencia o área</label>
				<select name="codigo_Depend" id="codigo_Depend"></select>
			</div>
			<div class="dep-desincorporar">
				<label for="dep-desincorporar">Código del bien</label>
				<select name="codigo_Bienes" id="codigo_Bienes"></select>
			</div>
			<div class="con-desincorporar">
				<label for="con-desincorporar">Conservación</label>
				<input placeholder="Estado de conservación" type="text" name="estado_Desincorp" id="estado_Desincorp" data-type="string" required>
			</div>
			<div class="data-d">
				<div class="label">
					<label>Desincorporado por:</label>
				</div>
				<div class="denuncia-desincorporar">
					<label for="denuncia-desincorporar">Denuncia</label>
					<input type="text" name="denuncia_Desincorp" id="denuncia_Desincorp">
				</div>
				<div class="date-denuncia">
					<label for="date-denuncia">Fecha denuncia</label>
					<input placeholder="Fecha de acta" type="date" name="fecha_Denuncia" id="fecha_Denuncia">
				</div>
				<div class="oficio-desincorporar">
					<label for="oficio-desincorporar">Oficio</label>
					<input placeholder="" type="text" name="oficio_Desincorp" id="oficio_Desincorp">
				</div>	
			</div>
			<div class="btn-center">
				<input type="submit" class="btn save" value="Enviar" name="guardar" id="guardar">
				<input type="reset" class="btn save" value="Borrar" name="borrar" id="borrar">
			</div>
		</form>
	</section>
</main>
<script src="/js/desincorporar.js"></script>

<?php 

	require_once 'Vista/layout/footer.php';
 ?>