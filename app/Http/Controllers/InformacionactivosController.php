<?php

namespace MageritFree\Http\Controllers;

use Illuminate\Http\Request;
use MageritFree\Http\Requests;
use MageritFree\Activo;
use MageritFree\Dominio;
use Illuminate\Support\Facades\Redirect;
use MageritFree\Http\Requests\ActivoFormRequest;
use DB;

class InformacionactivosController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request)
        {
            
            //Activo::with('dominio')->get();
             
            $activo=DB::table('activo')
            ->where ('condicion','=','1')
            ->orderBy('idactivo','desc')
            ->paginate(4);
            
            return view('proyecto.activo.index',["activo"=>$activo]);
        }
    }
    public function create()
    {
        return view("proyecto.activo.create");
    }
    public function store (ActivoFormRequest $request)
    {
        $activo=new Activo;
       
        $activo->idproyecto='1';
        $activo->nombre=$request->get('nombre');
        $activo->descripcion=$request->get('descripcion');
	$activo->propietario=$request->get('propietario');
        $activo->idactivo_catalogo=$request->get('idactivo_catalogo');
        $activo->condicion='1';
	$activo->dominio_iddominio=$request->get('dominio_iddominio');
	$activo->iddescripcion_activo=$request->get('iddescripcion_activo');
	            	
        $activo->save();
        return Redirect::to('proyecto/activo');

    }
  
    public function edit($id)
    {
        return view("proyecto.activo.edit",["activo"=>Activo::findOrFail($id)]);
    }
	
    public function update(ActivoFormRequest $request,$id)
    {
        $activo=Activo::findOrFail($id);
        $activo->updateActivo($activo, $request);
        return Redirect::route('activo.index');
    }
    public function destroy($id)
    {
        $activo = \MageritFree\Activo::find($id);
        $activo->delete();
        return back()->with('info', 'Fue eliminado exitosamente');
    }

}
