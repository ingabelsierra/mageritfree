<?php

namespace MageritFree\Http\Controllers;

use Illuminate\Http\Request;
use MageritFree\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;

class DesarrolloController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index(Request $request)
    {
        return view('proyecto.desarrollo.index');
      
    }
   
  
}
