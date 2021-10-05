<?php 

namespace app\models;

use vendor\orm\Builder;

class Incorporar extends Builder
{
	protected $table = 'incorporaciones', $key = 'num_Movincorp', $fillable = [
		"fecha_Incorp",
		"numacta_Incorp",
		"prestamo_Incorp",
		"codigo_Bienes",
		"codigo_Depend",
		"cedula_Encarg"
	];
}