<?php

namespace MageritFree\Http\Controllers;

use Illuminate\Http\Request;
use MageritFree\Http\Requests;
use MageritFree\Salvaguardacatalogo;
use Illuminate\Support\Facades\Redirect;
use DB;

class SalvaguardacatalogoController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request)
        {
            $salvaguardacatalogo= Salvaguardacatalogo::all();
            $query=trim($request->get('searchText'));
            $informacion=DB::table('descripcionsalvaguarda')->where('descripcion','LIKE','%'.$query.'%')
            ->orderBy('iddescripcion_salvaguarda','asc')
            ->paginate(10);
            return view('proyecto.salvaguardacatalogo.index',["informacion"=>$informacion,"searchText"=>$query],["salvaguardacatalogo"=>$salvaguardacatalogo]);
        }
    }
 
 
}
