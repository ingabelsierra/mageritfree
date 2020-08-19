<?php

namespace MageritFree;

use Illuminate\Database\Eloquent\Model;

use MageritFree\Http\Requests\EficaciasobreimpactoFormRequest;

class Eficaciasobreimpacto extends Model
{
	
	//$fuente = App\Fuente::all();
     protected $table='eficaciasobreimpacto';
	protected $primaryKey='ideficacia_sobre_impacto';
	
	public $timestamps=false;
	
	//protected $codigo;
	protected $fillable=['ideficacia_sobre_impacto','eficacia','salvaguarda_idsalvaguarda'];
	
	protected $guarded = [
	
	];
        
        
          public function updateEficaciasobreimpacto($eficaciasobreimpacto, EficaciasobreimpactoFormRequest $request)
         {

         return  $eficaciasobreimpacto->update(['eficacia'  => $request->eficacia,
                               'salvaguarda_idsalvaguarda' => $request->salvaguarda_idsalvaguarda,
                              
                               
                               
                               
        ]);


        }
}
