<?php

namespace MageritFree\Http\Controllers;

use Illuminate\Http\Request;
use MageritFree\Http\Requests;
use MageritFree\Valoracion;
use Illuminate\Support\Facades\Redirect;
use MageritFree\Http\Requests\ValoracionFormRequest;
use DB;

class ValoracionController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request)
        {
             $activo=DB::table('activo')
            ->where ('condicion','=','1')
            ->orderBy('idactivo','desc')
            ->paginate(555);
             
            $valoracion=DB::table('valoracion')
            ->orderBy('idvaloracion','desc')
            ->paginate(7);
            return view('proyecto.valoracion.index',["valoracion"=>$valoracion],["activo"=>$activo]);
        }
    }
    public function create(Request $request)
    {
        if ($request)
        {
        $activo=DB::table('activo')
         ->where ('condicion','=','1')
         ->orderBy('idactivo','desc')
         ->paginate(255);
        return view('proyecto.valoracion.create',["activo"=>$activo]);
        }
    }
    public function store (ValoracionFormRequest $request)
    {
        $valoracion=new Valoracion;
      
	$valoracion->valoracion=$request->get('valoracion');
	//$valoracion->criterio=$request->get('criterio');
	$valoracion->activo_idactivo=$request->get('activo_idactivo');
        $valoracion->flag=0;
        $valoracion->flag2=0;
        if($valoracion->valoracion>0 &&$valoracion->valoracion<3)
            $valoracion->criterio="Bajo";
        
        if($valoracion->valoracion>=3 &&$valoracion->valoracion<6)
            $valoracion->criterio="Medio";
        
        if($valoracion->valoracion>=6 &&$valoracion->valoracion<8)
            $valoracion->criterio="Alto";
        
         if($valoracion->valoracion>=8 &&$valoracion->valoracion<9)
            $valoracion->criterio="Muy Alto";
         
         if($valoracion->valoracion=10)
            $valoracion->criterio="Extremo";
           
	$valoracion->save();
        
        return Redirect::to('proyecto/valoracion');

    }
 
    public function edit($id)
    {
        return view("proyecto.valoracion.edit",["valoracion"=>Valoracion::findOrFail($id)]);
    }
	
    public function update(valoracionFormRequest $request,$id)
    {
        $valoracion=Valoracion::findOrFail($id);
        $valoracion->updateValoracion($valoracion, $request);
        return Redirect::route('valoracion.index');
    }
    public function destroy($id)
    {
        $valoracion = \MageritFree\Valoracion::find($id);
        $valoracion->delete();
        return back()->with('info', 'Fue eliminado exitosamente');
    }

}
