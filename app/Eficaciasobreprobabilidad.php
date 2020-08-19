<?php

namespace MageritFree;

use Illuminate\Database\Eloquent\Model;

use MageritFree\Http\Requests\EficaciasobreprobabilidadFormRequest;

class Eficaciasobreprobabilidad extends Model
{
	
	//$fuente = App\Fuente::all();
     protected $table='eficaciasobreprobabilidad';
	protected $primaryKey='ideficacia_sobre_probabilidad';
	
	public $timestamps=false;
	
	//protected $codigo;
	protected $fillable=['ideficacia_sobre_probabilidad','eficacia','salvaguarda_idsalvaguarda'];
	
	protected $guarded = [
	
	];
        
        
          public function updateEficaciasobreprobabilidad($eficaciasobreprobabilidad, EficaciasobreprobabilidadFormRequest $request)
         {

         return  $eficaciasobreprobabilidad->update(['eficacia'  => $request->eficacia,
                               'salvaguarda_idsalvaguarda' => $request->salvaguarda_idsalvaguarda,
                              
                               
                               
                               
        ]);


        }
}
