<?php

namespace MageritFree;

use Illuminate\Database\Eloquent\Model;
use MageritFree\Http\Requests\ProyectoFormRequest;

class Proyecto extends Model
{
	
	//$proyecto = App\Proyecto::all();
    
	   protected $table='proyecto';
	protected $primaryKey='idproyecto';
	
	public $timestamps=false;
	
	protected $fillable=['codigo','descripcion','propietario','organizacion','version','fecha','condicion'];
	
	 public function updateProyecto($proyecto, ProyectoFormRequest $request)
         {

         return  $proyecto->update(['codigo'  => $request->codigo,
                               'descripcion' => $request->descripcion,
                               'propietario' => $request->propietario,
                               'organizacion' => $request->organizacion,
                               'version' => $request->version,
                                'fecha' => $request->fecha,
                               
        ]);


        }
}
