<?php

namespace MageritFree\Http\Controllers;

use Illuminate\Http\Request;
use MageritFree\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use MageritFree\Amenaza;
use MageritFree\Salvaguarda;
use DB;

class degradacionresidualController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request)
        {
            /*$deg=DB::table('degradacionresidual')
            ->orderBy('iddegradacionResidual','desc')
            ->paginate(7);
            
            return view('proyecto.degradacionresidual.index',["deg"=>$deg]);*/
            
            return view('proyecto.degradacionresidual.index');
                        
        }
    }
    public function create()
    {
        $amenaza = Amenaza::all();
        $salvaguarda = Salvaguarda::all();
        
        $degradacion=DB::table('degradacionresidual')
        ->orderBy('iddegradacion_residual','desc')
        ->paginate(7);
            
        return view('proyecto.degradacionresidual.create',array ("degradacion"=>$degradacion,"amenaza"=>$amenaza,"salvaguarda"=>$salvaguarda));
   
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
