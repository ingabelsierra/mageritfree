<?php

namespace MageritFree;

use Illuminate\Database\Eloquent\Model;

use MageritFree\Http\Requests\ActivoFormRequest;

class Descripcionactivo extends Model
{
	
	protected $table='descripcionactivo';
	protected $primaryKey='iddescripcion_activo';
	
	public $timestamps=false;
	
	
	protected $fillable=['iddescripcion_activo','codigo','descripcion'];
	
	protected $guarded = [
	
	];
        
        
               
   
}
