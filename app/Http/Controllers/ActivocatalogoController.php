<?php

namespace MageritFree\Http\Controllers;

use Illuminate\Http\Request;
use MageritFree\Http\Requests;
use MageritFree\Activocatalogo;
use Illuminate\Support\Facades\Redirect;
use DB;

class ActivocatalogoController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request)
        {
            $activocatalogo=Activocatalogo::all();
           
            $query=trim($request->get('searchText'));
            $informacion=DB::table('descripcionactivo')
            ->where('descripcion','LIKE','%'.$query.'%')
            ->orderBy('iddescripcion_activo','asc')
            ->paginate(10);
            return view('proyecto.activocatalogo.index',["informacion"=>$informacion,"searchText"=>$query],["activocatalogo"=>$activocatalogo]);
        }
    }
  
 

}
