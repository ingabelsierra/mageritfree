<?php

namespace MageritFree;

use Illuminate\Database\Eloquent\Model;

class Amenazacatalogo extends Model
{
	
	
        protected $table='amenazacatalogo';
	protected $primaryKey='idamenaza_catalogo';
	
	public $timestamps=false;
	
	protected $fillable=['idamenaza_catalogo','codigo','descripcion'];
	
	protected $guarded = [
	
	];
        
       
}
