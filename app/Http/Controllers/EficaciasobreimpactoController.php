<?php

namespace MageritFree\Http\Controllers;

use Illuminate\Http\Request;
use MageritFree\Http\Requests;
use MageritFree\Eficaciasobreimpacto;
use MageritFree\Salvaguarda;
use Illuminate\Support\Facades\Redirect;
use MageritFree\Http\Requests\EficaciasobreimpactoFormRequest;
use DB;

class EficaciasobreimpactoController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index(Request $request)
    {
     if ($request)
        {
            /*$salvaguarda=DB::table('salvaguarda')
             ->where ('condicion','=','1')
             ->orderBy('idsalvaguarda','desc')
             ->paginate(255);*/
            
             $salvaguarda = Salvaguarda::all();
            
            $informacion=DB::table('eficaciasobreimpacto')
            ->orderBy('ideficacia_sobre_impacto','desc')
            ->paginate(3);
            return view('proyecto.eficaciasobreimpacto.index',["informacion"=>$informacion],["salvaguarda"=>$salvaguarda]);
        }
       
    }
  
    public function store (EficaciasobreimpactoFormRequest $request)
    {
        $eficaciasobreimpacto=new Eficaciasobreimpacto;
        $eficaciasobreimpacto->eficacia=$request->get('eficacia');
        $eficaciasobreimpacto->salvaguarda_idsalvaguarda=$request->get('salvaguarda_idsalvaguarda');
        $eficaciasobreimpacto->save();
        return Redirect::to('proyecto/salvaguarda');

    }
   
    public function edit($id)
    {
        return view("proyecto.eficaciasobreimpacto.edit",["eficaciasobreimpacto"=>Eficaciasobreimpacto::findOrFail($id)]);
    }
	
    public function update(EficaciasobreimpactoFormRequest $request,$id)
    {
       $eficaciasobreimpacto=Eficaciasobreimpacto::findOrFail($id);
       $eficaciasobreimpacto->updateEficaciasobreimpacto($eficaciasobreimpacto, $request);
       return Redirect::route('eficaciasobreimpacto.index');
    }
    public function destroy($id)
    {
       $eficaciasobreimpacto = \MageritFree\Eficaciasobreimpacto::find($id);
       $eficaciasobreimpacto->delete();
       return back()->with('info', 'Fue eliminado exitosamente');
    }

}
