<?php 

namespace app\models;

use vendor\orm\Builder;

class Bien extends Builder
{
	protected $table = 'bienes', $key = 'codigo_Bienes', $fillable = [
		"codigo_Bienes",
		"codhistorico_Bienes",
		"tipo_Bienes",
		"nombre_Bienes",
		"descripcion_Bienes",
		"fechacheq_Bienes",
		"conservacion_Bienes",
		"codigo_Categoria",
	];
}