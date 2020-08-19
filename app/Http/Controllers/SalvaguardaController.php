<?php

namespace MageritFree\Http\Controllers;

use Illuminate\Http\Request;
use MageritFree\Http\Requests;
use MageritFree\Salvaguarda;
use MageritFree\Salvaguardacatalogo;
use MageritFree\Amenaza;
use MageritFree\Activo;
use MageritFree\Descripcionsalvaguarda;
use Illuminate\Support\Facades\Redirect;
use MageritFree\Http\Requests\SalvaguardaFormRequest;
use DB;

class SalvaguardaController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request)
        {
            
            $salvaguarda=DB::table('salvaguarda')
            ->where ('condicion','=','1')
            ->orderBy('idsalvaguarda','desc')
            ->paginate(4);
            
             $activo=Activo::all();
             $salvaguardacatalogo = Salvaguardacatalogo::all();
             $descripcionsalvaguarda = Descripcionsalvaguarda ::all();
                        
            return view('proyecto.salvaguarda.index',array ("salvaguarda"=>$salvaguarda,"salvaguardacatalogo"=>$salvaguardacatalogo,"descripcionsalvaguarda"=>$descripcionsalvaguarda,"activo"=>$activo));
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
         
        // $amenaza=Amenaza::findOrFail($activo->idactivo)
        //  ->paginate(1);
         $amenaza=DB::table('amenaza')
         ->where ('condicion','=','1')
         ->orderBy('idamenaza','desc')
          ->paginate(255);
         
         $catalogo=DB::table('salvaguardacatalogo')
        ->orderBy('idsalvaguarda_catalogo','desc')
        ->paginate(255);
        
        $catalogodes=DB::table('descripcionsalvaguarda')
        ->orderBy('iddescripcion_salvaguarda','desc')
        ->paginate(255);
        
        
        return view('proyecto.salvaguarda.create',array ("catalogo"=>$catalogo,"catalogodes"=>$catalogodes,"activo"=>$activo,"amenaza"=>$amenaza));
     
        }
        
    }
    public function store (SalvaguardaFormRequest $request)
    {
        $salvaguarda=new Salvaguarda;
        $salvaguarda->amenaza_idamenaza=$request->get('amenaza_idamenaza');
        $salvaguarda->activo_idactivo=$request->get('activo_idactivo');
        $salvaguarda->idsalvaguarda_catalogo=$request->get('idsalvaguarda_catalogo');
        $salvaguarda->descripcion=$request->get('descripcion');
        $salvaguarda->iddescripcion_salvaguarda=$request->get('iddescripcion_salvaguarda');
        $salvaguarda->tipo=$request->get('tipo');
        $salvaguarda->condicion='1';
        
       
	
        $salvaguarda->save();
        if ($salvaguarda->tipo==0){
        return Redirect::to('proyecto/eficaciasobreimpacto');}
        
         if ($salvaguarda->tipo==1){
        return Redirect::to('proyecto/eficaciasobreprobabilidad');}

    }
   
    public function edit($id)
    {
        $activo=DB::table('activo')
         ->where ('condicion','=','1')
         ->orderBy('idactivo','desc')
         ->paginate(255);
        
        return view("proyecto.salvaguarda.edit",["salvaguarda"=>Salvaguarda::findOrFail($id)],["activo"=>$activo]);
    }
	
    public function update(SalvaguardaFormRequest $request,$id)
    {
        $salvaguarda=Salvaguarda::findOrFail($id);
        $salvaguarda->updateSalvaguarda($salvaguarda, $request);
        return Redirect::route('salvaguarda.index');
    }
    public function destroy($id)
    {
        $salvaguarda = \MageritFree\Salvaguarda::find($id);
        $salvaguarda->delete();
        return back()->with('info', 'Fue eliminado exitosamente');
    }

}
