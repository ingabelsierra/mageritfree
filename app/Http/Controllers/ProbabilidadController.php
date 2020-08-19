<?php

namespace MageritFree\Http\Controllers;

use Illuminate\Http\Request;
use MageritFree\Http\Requests;
use MageritFree\Probabilidad;
use MageritFree\Amenaza;
use Illuminate\Support\Facades\Redirect;
use MageritFree\Http\Requests\ProbabilidadFormRequest;
use DB;

class ProbabilidadController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request)
        {
             /*$amenaza=DB::table('amenaza')
             ->where ('condicion','=','1')
             ->orderBy('idamenaza','desc')
             ->paginate(255);*/
            
            $amenaza = Amenaza::all();
            
            $probabilidad=DB::table('probabilidad')
            ->orderBy('idprobabilidad','desc')
            ->paginate(3);
            return view('proyecto.probabilidad.index',["probabilidad"=>$probabilidad],["amenaza"=>$amenaza]);
        }
     
        
    }
   
    public function store (ProbabilidadFormRequest $request)
    {
        $probabilidad=new Probabilidad;
        $probabilidad->aro=$request->get('aro');
        $probabilidad->amenaza_idamenaza=$request->get('amenaza_idamenaza');
        $probabilidad->flag=0;
        $probabilidad->save();
        return Redirect::to('proyecto/amenaza');

    }
   
    public function edit($id)
    {
        return view("proyecto.probabilidad.edit",["probabilidad"=>Probabilidad::findOrFail($id)]);
    }
	
    public function update(ProbabilidadFormRequest $request,$id)
    {
         $probabilidad=Probabilidad::findOrFail($id);
        $probabilidad->updateProbabilidad($probabilidad, $request);
        return Redirect::route('probabilidad.index');
    }
    public function destroy($id)
    {
        $probabilidad = \MageritFree\Probabilidad::find($id);
        $probabilidad->delete();
        return back()->with('info', 'Fue eliminado exitosamente');
    }

}
