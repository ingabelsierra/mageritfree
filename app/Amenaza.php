<?php

namespace MageritFree;

use Illuminate\Database\Eloquent\Model;

use MageritFree\Http\Requests\AmenazaFormRequest;

class Amenaza extends Model
{
	
	
        protected $table='amenaza';
	protected $primaryKey='idamenaza';
	
	public $timestamps=false;
	
	protected $fillable=['idamenaza_catalogo','codigo','descripcion','activo_idactivo','condicion','descripcion_amenaza'];
	
	protected $guarded = [
	
	];
        
        
          public function updateAmenaza($amenaza, AmenazaFormRequest $request)
         {

         return  $amenaza->update(['iddescripcion_amenaza'  => $request->iddescripcion_amenaza,
                                   'descripcion' => $request->descripcion,
                               'idamenaza_catalogo' => $request->idamenaza_catalogo,
                                'activo_idactivo' => $request->activo_idactivo,
                               
                               
                               
        ]);


        }
}
