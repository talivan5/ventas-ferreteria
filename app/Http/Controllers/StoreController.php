<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;
use App\Categoria;

class StoreController extends Controller
{
     
    public function index()
    {  
        
        
        // $categoria = Categoria::findOrfail($request->id);
        // $articulos = $categoria->articulos;
        return view('almacen.articulo.lista');
        
    }
    public function getCategorias()
    {
        $categorias= Categoria::orderBy('id','ASC')->get();
        return $categorias;
    }
    public function getArticulos($id)
    {
        $categoria = Categoria::find($id);
        return $categoria->articulos;
    }
    public function getModal($id)
    {
        $categoria = Categoria::find($id);
        echo $categoria;
        return $categoria->articulos;
    }
    public function inicio(Request $request){
        if ($request)
    	{
            $query = trim($request->input('searchText'));
            $articulos = Articulo::where('nombre', 'LIKE', "%$query%")
    			->where('condicion','=','1')
    			->orderBy('id', 'DESC')
                ->paginate(6);
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
