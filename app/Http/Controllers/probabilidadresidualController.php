<?php

namespace MageritFree\Http\Controllers;

use Illuminate\Http\Request;
use MageritFree\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use MageritFree\Amenaza;
use MageritFree\Salvaguarda;
use DB;

class probabilidadResidualController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index()
    {
        
       return view('proyecto.probabilidadresidual.index');                   
      
    }
    public function create()
    {
        $amenaza = Amenaza::all();
        $salvaguarda = Salvaguarda::all();
        
        $prob=DB::table('probabilidadresidual')
        ->orderBy('idprobabilidad_residual','desc')
        ->paginate(7);
            
            return view('proyecto.probabilidadresidual.create',array ("prob"=>$prob,"amenaza"=>$amenaza,"salvaguarda"=>$salvaguarda)); 
        
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
