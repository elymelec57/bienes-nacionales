<?php 

namespace app\models;

use vendor\orm\Builder;

class Desincorporar extends Builder
{
	protected $table = 'desincorporaciones', $key = 'mov_Desincorp', $fillable = [
		"acta_Desincorp",
		"fecha_Desincorp",
		"codigo_Depend",
		"codigo_Bienes",
		"estado_Desincorp",
		"denuncia_Desincorp",
		"fecha_Denuncia",
		"oficio_Desincorp"
	];
}