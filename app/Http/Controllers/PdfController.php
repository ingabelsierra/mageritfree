<?php

namespace MageritFree\Http\Controllers;

use Illuminate\Http\Request;
use MageritFree\Http\Requests;
use MageritFree\Http\Controllers\Controller;
use MageritFree\Activo;
use MageritFree\Proyecto;
use MageritFree\Informacionactivos;
use Illuminate\Support\Facades\Redirect;
use DB;

class PdfController extends Controller
{
   
    
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index()
    {
        
        return view("proyecto.pdf.listado");
        
    }


    public function crearPDF($datos1,$datos2,$vistaurl,$tipo)
    {

        $data = $datos1;
        $data2 = $datos2;
        $date = date('Y-m-d');
        
        $view =  \View::make($vistaurl, compact('data','data2', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte.pdf'); }
    }


    public function crear_reporte_poractivo($tipo){

     $vistaurl="proyecto/pdf.reporte_por_activo";

     $v=Informacionactivos::all();
     $proyecto=Proyecto::all();
     
     return $this->crearPDF($v,$proyecto, $vistaurl,$tipo);




    }
    
    public function crear_reporte_general($tipo){

     $vistaurl="proyecto/pdf.reporte_general";

     $v=Informacionactivos::all();
     $proyecto=Proyecto::all();
     
     return $this->crearPDF($v,$proyecto, $vistaurl,$tipo);




    }


   
}
