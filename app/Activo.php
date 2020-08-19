<?php

namespace MageritFree;

use Illuminate\Database\Eloquent\Model;

use MageritFree\Http\Requests\ActivoFormRequest;

class Activo extends Model
{
	
	protected $table='activo';
	protected $primaryKey='idactivo';
	
	public $timestamps=false;
	
	
	protected $fillable=['idproyecto','descripcion','nombre','propietario','dominio_iddominio','idactivo_catalogo','condicion','iddescripcion_activo'];
	
	protected $guarded = [
	
	];
        
        
         public function updateActivo($activo, ActivoFormRequest $request)
         {

         return  $activo->update(['nombre' => $request->nombre,
                               'descripcion' => $request->descripcion,
                               'propietario' => $request->propietario,
                               'idactivo_catalogo' => $request->idactivo_catalogo,
                               'dominio_iddominio' => $request->dominio_iddominio,
                               'iddescripcion_activo' => $request->iddescripcion_activo,
                               
                               
        ]);


        }
        
   
}
