<?php

namespace MageritFree\Http\Controllers;

use Illuminate\Http\Request;
use MageritFree\Http\Requests;
use MageritFree\Proyecto;
use Illuminate\Support\Facades\Redirect;
use MageritFree\Http\Requests\ProyectoFormRequest;
use DB;

class ProyectoController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request)
        {
            
            $proyecto=DB::table('proyecto')
            ->where ('condicion','=','1')
            ->orderBy('idproyecto','desc')
            ->paginate(7);
            return view('proyecto.proyecto.index',["proyecto"=>$proyecto]);
        }
    }
   
  
    public function edit($id)
    {
        return view("proyecto.proyecto.edit",["proyecto"=>Proyecto::findOrFail($id)]);
    }
	
   public function update(ProyectoFormRequest $request,$id)
    {
       
        $proyecto=Proyecto::findOrFail($id);
        $proyecto->updateProyecto($proyecto, $request);
        return Redirect::route('proyecto.index');
                
    }
   

}
