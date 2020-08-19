<?php

namespace MageritFree\Http\Controllers;

use Illuminate\Http\Request;
use MageritFree\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use MageritFree\Activo;
use MageritFree\Amenaza;
use DB;

class RiesgoController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request)
        {
                
            return view('proyecto.riesgo.index');
        }
    }
    public function create()
    {
         $amenaza = Amenaza::all();
         $activo = Activo::all();
            
         $riesgo=DB::table('riesgo')
         ->orderBy('idriesgo','desc')
         ->paginate(7);
         return view('proyecto.riesgo.create',array ("riesgo"=>$riesgo,"activo"=>$activo,"amenaza"=>$amenaza));
       
    }
    public function store (ActivoFormRequest $request)
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
