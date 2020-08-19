<?php

namespace MageritFree;

use Illuminate\Database\Eloquent\Model;

use MageritFree\Http\Requests\ProbabilidadFormRequest;

class Probabilidad extends Model
{
	
	//$fuente = App\Fuente::all();
     protected $table='probabilidad';
	protected $primaryKey='idprobabilidad';
	
	public $timestamps=false;
	
	//protected $codigo;
	protected $fillable=['idprobabilidad','aro','amenaza_idamenaza'];
	
	protected $guarded = [
	
	];
        
        
          public function updateProbabilidad($probabilidad, ProbabilidadFormRequest $request)
         {

         return  $probabilidad->update(['aro'  => $request->aro,
                                                     
                               
                               
        ]);


        }
}
