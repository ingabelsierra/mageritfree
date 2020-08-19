<?php

namespace MageritFree\Http\Controllers;

use Illuminate\Http\Request;
use MageritFree\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use MageritFree\Activo;
use MageritFree\Amenaza;
use DB;

class impactoresidualController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index()
    {
      return view('proyecto.impactoresidual.index');
              
    }
    public function create()
    {
        $amenaza = Amenaza::all();
        $activo = Activo::all();
        
        $imp=DB::table('impactoresidual')
        ->orderBy('idimpacto_residual','desc')
        ->paginate(7);
            
        return view('proyecto.impactoresidual.create',array ("imp"=>$imp,"activo"=>$activo,"amenaza"=>$amenaza));
       
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
