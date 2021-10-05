<?php 

namespace app\models;

use vendor\orm\Builder;

class Category extends Builder
{
	protected $table = 'categorias', $key = 'codigo_Categoria', $fillable = [
		"codigo_Categoria",
		"presupuesto_Categoria",
		"clasificacion_Categoria",
		"denominacion_Categoria",
	];
}