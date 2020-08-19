<?php

namespace MageritFree;

use Illuminate\Database\Eloquent\Model;

use MageritFree\Http\Requests\AmenazaFormRequest;

class Descripcionamenaza extends Model
{
	
	
        protected $table='descripcionamenaza';
	protected $primaryKey='iddescripcion_amenaza';
	
	public $timestamps=false;
	
	protected $fillable=['idamenaza_catalogo','codigo','descripcion'];
	
	protected $guarded = [
	
	];
        
        
}
