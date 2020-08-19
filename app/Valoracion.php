<?php

namespace MageritFree;

use Illuminate\Database\Eloquent\Model;

use MageritFree\Http\Requests\ValoracionFormRequest;

class Valoracion extends Model
{
	
	//$fuente = App\Fuente::all();
     protected $table='valoracion';
	protected $primaryKey='idvaloracion';
	
	public $timestamps=false;
	
	//protected $codigo;
	protected $fillable=['nombre','codigo','descripcion','valoracion','criterio','activo_idactivo'];
	
	protected $guarded = [
	
	];
        
        
          public function updateValoracion($valoracion, ValoracionFormRequest $request)
         {

         return  $valoracion->update([
                               'nombre' => $request->nombre,
                               'codigo' => $request->codigo,
                               'descripcion' => $request->descripcion,
                               'valoracion' => $request->valoracion,
                               'criterio' => $request->criterio_idcriterio,
                               'activo_idactivo' => $request->activo_idactivo,
                               
                               
                               
        ]);


        }
}
