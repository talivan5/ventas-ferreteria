<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;
use DB;
class StoreController extends Controller
{
    
    public function index()
    {
        $articulos=Articulo::All();
        return view('almacen.articulo.lista',compact('articulos'));
      
    }

    public function show($slug)
    {
        $articulos=Articulo::where('slug',$slug)->first();
        return view('almacen.articulo.show',compact('articulos'));
    }

   
   
}
