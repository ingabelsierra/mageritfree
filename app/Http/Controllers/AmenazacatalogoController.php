<?php

namespace MageritFree\Http\Controllers;

use Illuminate\Http\Request;
use MageritFree\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use MageritFree\Amenazacatalogo;
use DB;

class AmenazacatalogoController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request)
        {
            
            $amenazacatalogo=Amenazacatalogo::all();
            
            $query=trim($request->get('searchText'));
            $informacion=DB::table('descripcionamenaza')
           ->where('descripcion','LIKE','%'.$query.'%')
            ->orderBy('iddescripcion_amenaza','asc')
            ->paginate(10);
            return view('proyecto.amenazacatalogo.index',["informacion"=>$informacion,"searchText"=>$query],["amenazacatalogo"=>$amenazacatalogo]);
        }
        	
    }
  
  

}
