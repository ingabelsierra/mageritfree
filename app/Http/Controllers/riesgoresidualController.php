<?php

namespace MageritFree\Http\Controllers;

use Illuminate\Http\Request;
use MageritFree\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use MageritFree\Activo;
use MageritFree\Amenaza;
use MageritFree\Salvaguarda;
use DB;

class riesgoresidualController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index()
    {
      return view('proyecto.riesgoresidual.index');  
      
    }
    public function create()
    {
        $amenaza = Amenaza::all();
        $activo = Activo::all();
        $salvaguarda = Salvaguarda::all();
        
        $prob=DB::table('riesgoresidual')
        ->orderBy('idriesgo_residual','desc')
        ->paginate(7);
            
        return view('proyecto.riesgoresidual.create',array ("prob"=>$prob,"activo"=>$activo,"amenaza"=>$amenaza,"salvaguarda"=>$salvaguarda));
       
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
