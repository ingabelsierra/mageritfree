<?php

namespace MageritFree;

use Illuminate\Database\Eloquent\Model;

use MageritFree\Activo;

use MageritFree\Http\Requests\DominioFormRequest;

class Dominio extends Model
{
	
	protected $table='dominio';
	protected $primaryKey='iddominio';
	
	public $timestamps=false;
	
	protected $fillable=['descripcion','nombre'];
	
	protected $guarded = [
	
	];
        
        public function updateDominio($dominio, DominioFormRequest $request)
         {

         return  $dominio->update([
                               'descripcion' => $request->descripcion,
                               'nombre' => $request->nombre,
                               
                               
        ]);


        }
        
     
}
