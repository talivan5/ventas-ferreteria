<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;

class StoreController extends Controller
{
     
    public function index()
    {   
        $articulos=Articulo::orderBy('id','ASC')->paginate(6);
        return view('almacen.articulo.lista',compact('articulos'));
    }
    public function inicio(Request $request){
        if ($request)
    	{
            $query = trim($request->input('searchText'));
            $articulos = Articulo::where('nombre', 'LIKE', "%$query%")
    			->where('condicion','=','1')
    			->orderBy('id', 'DESC')
                ->paginate(4);
            return view('inicio', [
                'articulos'=>$articulos, 
                'searchText'=>$query
            ]);
        }
    }
    public function inicioAdmin(){
        $articulos=Articulo::orderBy('id','ASC')->paginate(6);
        return view('inicioAdmin',compact('articulos'));
    }

    public function show($slug)
    {
        $articulos=Articulo::where('slug',$slug)->first();
        return view('almacen.articulo.show',compact('articulos'));
    }

   
   
}
