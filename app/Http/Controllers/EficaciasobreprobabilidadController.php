<?php

namespace MageritFree\Http\Controllers;

use Illuminate\Http\Request;
use MageritFree\Http\Requests;
use MageritFree\Eficaciasobreprobabilidad;
use Illuminate\Support\Facades\Redirect;
use MageritFree\Http\Requests\EficaciasobreprobabilidadFormRequest;
use MageritFree\Salvaguarda;
use DB;

class eficaciasobreprobabilidadController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index(Request $request)
    {
     if ($request)
        {
          
           $salvaguarda = Salvaguarda::all();
          
            $informacion=DB::table('eficaciasobreprobabilidad')
            ->orderBy('ideficacia_sobre_probabilidad','desc')
            ->paginate(3);
            return view('proyecto.eficaciasobreprobabilidad.index',["informacion"=>$informacion],["salvaguarda"=>$salvaguarda]);
        }
        
    }
   
    public function store (EficaciasobreprobabilidadFormRequest $request)
    {
        $eficaciasobreprobabilidad=new Eficaciasobreprobabilidad;
        $eficaciasobreprobabilidad->eficacia=$request->get('eficacia');
        $eficaciasobreprobabilidad->salvaguarda_idsalvaguarda=$request->get('salvaguarda_idsalvaguarda');
        $eficaciasobreprobabilidad->save();
        return Redirect::to('proyecto/salvaguarda');

    }
   
    public function edit($id)
    {
        return view("proyecto.eficaciasobreprobabilidad.edit",["eficaciasobreprobabilidad"=>Eficaciasobreprobabilidad::findOrFail($id)]);
    }
	
    public function update(EficaciasobreprobabilidadFormRequest $request,$id)
    {
        $eficaciasobreprobabilidad=Eficaciasobreprobabilidad::findOrFail($id);
        $eficaciasobreprobabilidad->updateEficaciasobreprobabilidad($eficaciasobreprobabilidad, $request);
        return Redirect::route('eficaciasobreprobabilidad.index');
    }
    public function destroy($id)
    {
        $eficaciasobreprobabilidad = \MageritFree\Eficaciasobreprobabilidad::find($id);
        $eficaciasobreprobabilidad->delete();
        return back()->with('info', 'Fue eliminado exitosamente');
    }

}
