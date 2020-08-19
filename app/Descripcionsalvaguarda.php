<?php

namespace MageritFree;

use Illuminate\Database\Eloquent\Model;


class Descripcionsalvaguarda extends Model
{
	
	
        protected $table='descripcionsalvaguarda';
	protected $primaryKey='iddescripcion_salvaguarda';
	
	public $timestamps=false;
	
	//protected $codigo;
	protected $fillable=['descripcion','idsalvaguarda_catalogo','codigo'];
	
	protected $guarded = [
	
	];
        
        
}
