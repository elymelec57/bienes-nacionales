<?php 

namespace app\models;

use vendor\orm\Builder;

class Dependencia extends Builder
{
	protected $table = 'dependencias', $key = 'codigo_Depend', $fillable =
	[
		'clasificacion_Depend', 
		'nombre_Depend',        
		'locacion_Depend',      
		'observacion_Depend',   
		'tomafisica_Depend',    
		'edicion_Depend',       
		'documentacion_Depend', 
		'fechacheq_Depend',     
		'cedula_Encarg'
	];
}