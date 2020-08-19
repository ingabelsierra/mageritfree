<?php

namespace MageritFree;

use Illuminate\Database\Eloquent\Model;

use MageritFree\Http\Requests\SalvaguardaFormRequest;

class Salvaguardacatalogo extends Model
{
	
	//$fuente = App\Fuente::all();
     protected $table='salvaguardacatalogo';
	protected $primaryKey='idsalvaguarda_catalogo';
	
	public $timestamps=false;
	
	//protected $codigo;
	protected $fillable=['descripcion','idsalvaguarda_catalogo','codigo'];
	
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
