<?php

namespace MageritFree;

use Illuminate\Database\Eloquent\Model;

use MageritFree\Http\Requests\ActivoFormRequest;

class Informacionactivos extends Model
{
	
	protected $table='informacionactivos';
	//protected $primaryKey='idactivo';
	
	public $timestamps=false;
	
	
	protected $fillable=['idproyecto','descripcion','nombre','propietario','dominio_iddominio','idactivo_catalogo','condicion','iddescripcion_activo'];
	
	protected $guarded = [
	
	];
        
        
}
