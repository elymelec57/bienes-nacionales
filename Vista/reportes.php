<?php 

	require_once 'Vista/layout/header.php';
	require_once 'Vista/layout/menu.php';
?>

<main>
	<h1 class="h1">[@subtitle]</h1>
	<div class="reports">
		<a href="/reportes/listadodebienes" class="btn-report" target="_blank">Listado de bienes</a>
		<a href="/reportes/listadodeincorporaciones" class="btn-report" target="_blank">Bienes incorporados</a>
		<a href="/reportes/listadodecategorias" class="btn-report" target="_blank">Listado de Categorias</a>
		<a href="/reportes/listadodeencargados" class="btn-report" target="_blank">Listado de Encargados</a>
	</div>	
</main>

<?php 

	require_once 'Vista/layout/footer.php';
 ?>