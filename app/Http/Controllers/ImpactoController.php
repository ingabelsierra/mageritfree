<?php

namespace MageritFree\Http\Controllers;

use Illuminate\Http\Request;
use MageritFree\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use MageritFree\Http\Requests\ImpactoFormRequest;
use MageritFree\Activo;
use MageritFree\Amenaza;
use DB;

class ImpactoController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index(Request $request)
    {
       if ($request)
        {
            
            return view('proyecto.impacto.index');
        }
                 
    }
    
   
    public function create(Request $request)
    {
        //DB::statement('call calcularimpacto()');
         
        if ($request)
        {
            $amenaza = Amenaza::all();
            $activo = Activo::all();
            
            $impacto=DB::table('impacto')
            ->orderBy('idimpacto','desc')
            ->paginate(7);
            
            return view('proyecto.impacto.create',array("impacto"=>$impacto,"activo"=>$activo,"amenaza"=>$amenaza));
                        
        }
    }
    public function store ()
    {
      
      
    }
  
    public function edit()
    {
        
    }
	
    public function update()
    {
       
    }
    public function destroy()
    {
      
    }

}
