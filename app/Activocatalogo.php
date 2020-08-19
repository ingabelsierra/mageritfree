<?php

namespace MageritFree;

use Illuminate\Database\Eloquent\Model;

use MageritFree\Http\Requests\ActivoFormRequest;

class Activocatalogo extends Model
{
	
	protected $table='activocatalogo';
	protected $primaryKey='idactivo_catalogo';
	
	public $timestamps=false;
	
	
	protected $fillable=['idactivo_catalogo','codigo','descripcion'];
	
	protected $guarded = [
	
	];
        
        
               
   
}
