<?php

namespace MageritFree;

use Illuminate\Database\Eloquent\Model;

use MageritFree\Http\Requests\DegradacionFormRequest;

class Degradacion extends Model
{
	
	//$fuente = App\Fuente::all();
     protected $table='degradacion';
	protected $primaryKey='iddegradacion';
	
	public $timestamps=false;
	
	//protected $codigo;
	protected $fillable=['iddegradacion','porcentaje','amenaza_idamenaza'];
	
	protected $guarded = [
	
	];
        
        
          public function updateDegradacion($degradacion, DegradacionFormRequest $request)
         {

         return  $degradacion->update(['porcentaje'  => $request->porcentaje,
                                                    
                               
                               
                               
        ]);


        }
}
