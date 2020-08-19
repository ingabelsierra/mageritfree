<?php

namespace MageritFree\Http\Controllers;

use Illuminate\Http\Request;
use MageritFree\Http\Requests;
use MageritFree\Amenaza;
use MageritFree\Amenazacatalogo;
use MageritFree\Activo;
use MageritFree\Descripcionamenaza;
use Illuminate\Support\Facades\Redirect;
use MageritFree\Http\Requests\AmenazaFormRequest;
use DB;

class AmenazaController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request)
        {
            $activo = Activo::all(); 
            $amenazacatalogo = Amenazacatalogo::all(); 
            $descripcionamenaza = Descripcionamenaza::all(); 
            
            /*$descripcionamenaza=DB::table('descripcionamenaza')
            ->orderBy('iddescripcion_amenaza','desc')
            ->paginate(255);*/
            
             
            $amenaza=DB::table('amenaza')
            ->where ('condicion','=','1')
            ->orderBy('idamenaza','desc')
            ->paginate(4);
            return view('proyecto.amenaza.index',array ("amenaza"=>$amenaza,"activo"=>$activo,"amenazacatalogo"=>$amenazacatalogo,"descripcionamenaza"=>$descripcionamenaza));
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
         
         $catalogo=DB::table('amenazacatalogo')
        ->orderBy('idamenaza_catalogo','desc')
        ->paginate(255);
        
        $catalogodes=DB::table('descripcionamenaza')
        ->orderBy('iddescripcion_amenaza','desc')
        ->paginate(255);
        
       return view('proyecto.amenaza.create',array ("catalogo"=>$catalogo,"catalogodes"=>$catalogodes,"activo"=>$activo));
        
        //return view('proyecto.amenaza.create',["activo"=>$activo]);
        }
         
    }
    public function store (AmenazaFormRequest $request)
    {
        $amenaza=new Amenaza;
      	$amenaza->descripcion=$request->get('descripcion');
        $amenaza->idamenaza_catalogo=$request->get('idamenaza_catalogo');
        $amenaza->condicion='1';
	$amenaza->activo_idactivo=$request->get('activo_idactivo');
	$amenaza->iddescripcion_amenaza=$request->get('iddescripcion_amenaza');
        $amenaza->tipo=$request->get('tipo');
	$amenaza->save();
        
        if($amenaza->tipo==0){
        return Redirect::to('proyecto/probabilidad');
        }
         if($amenaza->tipo==1){
        return Redirect::to('proyecto/degradacion');
        }

    }

    public function edit($id)
    {   
        $activo=DB::table('activo')
         ->where ('condicion','=','1')
         ->orderBy('idactivo','desc')
          ->paginate(255);
        
        return view('proyecto.amenaza.edit',["amenaza"=>Amenaza::findOrFail($id)],["activo"=>$activo]);
        
    }
    
    public function update(AmenazaFormRequest $request,$id)
    {
        $amenaza=Amenaza::findOrFail($id);
        $amenaza->updateAmenaza($amenaza, $request);
        return Redirect::route('amenaza.index');
    }
    
    public function destroy($id)
    {
        $amenaza = \MageritFree\Amenaza::find($id);
        $amenaza->delete();
        return back()->with('info', 'Fue eliminado exitosamente');
    }

}
