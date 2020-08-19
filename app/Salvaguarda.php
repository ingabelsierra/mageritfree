<?php

namespace MageritFree;

use Illuminate\Database\Eloquent\Model;

use MageritFree\Http\Requests\SalvaguardaFormRequest;

class Salvaguarda extends Model
{
	
	//$fuente = App\Fuente::all();
     protected $table='salvaguarda';
	protected $primaryKey='idsalvaguarda';
	
	public $timestamps=false;
	
	//protected $codigo;
	protected $fillable=['descripcion','idsalvaguarda_catalogo','activo_idactivo','eficacia','iddescripcion_salvaguarda'];
	
	protected $guarded = [
	
	];
        
        
          public function updateSalvaguarda($salvaguarda, SalvaguardaFormRequest $request)
         {

         return  $salvaguarda->update([
                               'descripcion' => $request->descripcion,
                              'activo_idactivo' => $request->activo_idactivo,
                               'idsalvaguarda_catalogo' => $request->idsalvaguarda_catalogo,
                               'iddescripcion_salvaguarda' => $request->iddescripcion_salvaguarda,
                               
                               
                               
        ]);


        }
}
