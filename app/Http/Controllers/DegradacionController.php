<?php

namespace MageritFree\Http\Controllers;

use Illuminate\Http\Request;
use MageritFree\Http\Requests;
use MageritFree\Degradacion;
use MageritFree\Amenaza;
use Illuminate\Support\Facades\Redirect;
use MageritFree\Http\Requests\DegradacionFormRequest;
use DB;

class DegradacionController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index(Request $request)
    {
     if ($request)
        {
            /* $amenaza=DB::table('amenaza')
             ->where ('condicion','=','1')
             ->orderBy('idamenaza','desc')
             ->paginate(255);*/
             
             $amenaza = Amenaza::all();
            
            $degradacion=DB::table('degradacion')
            ->orderBy('iddegradacion','desc')
            ->paginate(3);
            
            return view('proyecto.degradacion.index',["degradacion"=>$degradacion],["amenaza"=>$amenaza]);
        }
        
    }
   
    public function store (DegradacionFormRequest $request)
    {
        $degradacion=new Degradacion;
        $degradacion->porcentaje=$request->get('porcentaje');
        $degradacion->amenaza_idamenaza=$request->get('amenaza_idamenaza');
        $degradacion->flag=0;
        $degradacion->save();
                        
        return Redirect::to('proyecto/amenaza');

    }
   
    public function edit($id)
    {
        return view("proyecto.degradacion.edit",["degradacion"=>Degradacion::findOrFail($id)]);
    }
	
    public function update(DegradacionFormRequest $request,$id)
    {
        $degradacion=Degradacion::findOrFail($id);
        $degradacion->updateDegradacion($degradacion, $request);
        return Redirect::route('degradacion.index');
    }
    public function destroy($id)
    {
        $degradacion = \MageritFree\Degradacion::find($id);
        $degradacion->delete();
        return back()->with('info', 'Fue eliminado exitosamente');
    }

}
