<?php 

namespace app\models;

use vendor\orm\Builder;

class Encargado extends Builder
{
	protected $table = 'encargados',  $key = 'cedula_Encarg', $fillable = [
		"cedula_Encarg",
		"nombre_Encarg",
		"apellido_Encarg",
		"cargo_Encarg",
		"telefono_Encarg",
	];
}