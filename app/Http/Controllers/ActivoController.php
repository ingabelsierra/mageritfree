<?php

namespace MageritFree\Http\Controllers;

use Illuminate\Http\Request;
use MageritFree\Http\Requests;
use MageritFree\Activo;
use MageritFree\Dominio;
use MageritFree\Activocatalogo;
use MageritFree\Descripcionactivo;
use Illuminate\Support\Facades\Redirect;
use MageritFree\Http\Requests\ActivoFormRequest;
use DB;

class ActivoController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request)
        {
            
          
            $dominio = Dominio::all();   
            
            /*$activocatalogo=DB::table('activocatalogo')
            ->orderBy('idactivo_catalogo','desc')
            ->paginate(555);*/
            
            $activocatalogo = Activocatalogo::all();
            
            /*$descripcionactivo=DB::table('descripcionactivo')
            ->orderBy('iddescripcion_activo','desc')
            ->paginate(555);*/
            
            $descripcionactivo = Descripcionactivo::all();
            
            $activo=DB::table('activo')
            ->where ('condicion','=','1')
            ->orderBy('idactivo','desc')
            ->paginate(4);
            
            return view('proyecto.activo.index',array("activo"=>$activo,"dominio"=>$dominio,"activocatalogo"=>$activocatalogo,"descripcionactivo"=>$descripcionactivo));
        }
    }
    public function create()
    {
        $catalogo=DB::table('activocatalogo')
        ->orderBy('idactivo_catalogo','desc')
        ->paginate(255);
        
        $catalogodes=DB::table('descripcionactivo')
        ->orderBy('iddescripcion_activo','desc')
        ->paginate(255);
        
        $dominio=DB::table('dominio')
        ->orderBy('iddominio','desc')
        ->paginate(255);
        
        return view('proyecto.activo.create',array ("catalogo"=>$catalogo,"catalogodes"=>$catalogodes,"dominio"=>$dominio));
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
        /* $catalogo=DB::table('activocatalogo')
         ->where ('condicion','=','1')
         ->orderBy('idactivo_catalogo','desc')
         ->paginate(255);
         "catalogodes"=>$catalogodes
         return view('proyecto.activo.create',array (["catalogo"=>$catalogo],["activo"=>Activo::findOrFail($id)]);
         */
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
