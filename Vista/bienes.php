<?php 

	require_once 'Vista/layout/header.php';
	require_once 'Vista/layout/menu.php';
?>

<main>
	<div class="btn-cate">
		<h1 class="h1">[@subtitle]</h1>
	</div>
	<section class="section">
		<div class="table-elements">
			<div class="elements">
				<h2 class="h1">Todos los registros</h2>
			</div>
		</div>
		<div class="table-scroll">
			<table class="bienes-t">
				<thead>
					<tr>
						<th title="Código actual">Código A.</th>
						<th title="Código histórico">Código H.</th>
						<th title="Tipo de bien">Tipo</th>
						<th title="Nombre del bien">Nombre</th>
						<th title="Conservacion">Estado</th>
						<th title="Fecha del chequeo">Chequeo</th>
						<th title="Categoría sigecof">Cat. Sigecof</th>
						<th>Opción</th>
					</tr>
				</thead>
				<tbody id="el">	
				</tbody>
			</table>
		</div>
	</section>
</main>
<script src="/js/bienes.js"></script>

<?php 

	require_once 'Vista/layout/footer.php';
 ?>