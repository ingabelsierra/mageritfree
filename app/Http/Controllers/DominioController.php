<?php

namespace MageritFree\Http\Controllers;

use Illuminate\Http\Request;
use MageritFree\Http\Requests;
use MageritFree\Dominio;
use Illuminate\Support\Facades\Redirect;
use MageritFree\Http\Requests\DominioFormRequest;
use DB;

class DominioController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $informacion=DB::table('dominio')->where('nombre','LIKE','%'.$query.'%')
            ->where ('condicion','=','1')
            ->orderBy('iddominio','desc')
            ->paginate(3);
            return view('proyecto.dominio.index',["informacion"=>$informacion,"searchText"=>$query]);
        }
    }
    public function create()
    {
        return view("proyecto.dominio.create");
    }
    public function store (DominioFormRequest $request)
    {
        $dominio=new Dominio;
	$dominio->nombre=$request->get('nombre');
        $dominio->descripcion=$request->get('descripcion');
        $dominio->condicion='1';
	$dominio->save();
        return Redirect::to('proyecto/dominio');

    }
    
    public function show($id)
    {
        return view("proyecto.fuente.show",["categoria"=>Categoria::findOrFail($id)]);
    }
    
    public function edit($id)
    {
        return view("proyecto.dominio.edit",["dominio"=>Dominio::findOrFail($id)]);
    }
	
    public function update(DominioFormRequest $request,$id)
    {
        $dominio=Dominio::findOrFail($id);
        $dominio->updateDominio($dominio, $request);
        return Redirect::route('dominio.index');
    }
    public function destroy($id)
    {
        $dominio = \MageritFree\Dominio::find($id);
        $dominio->delete();
        return back()->with('info', 'Fue eliminado exitosamente');
    }

}
