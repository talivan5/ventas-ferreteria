<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ArticuloFormRequest;
use App\Articulo;

use DB;

class ArticuloController extends Controller
{
    public function index()
    {
        $articulos=Articulo::orderBy('id','ASC')->paginate(5);
        return view('almacen.articulo.index',compact('articulos'));
    }

    public function create(Request $request)
    {
        //Para el select form
        
        $categorias = DB::table('categoria')->where('condicion', '=', '1')->get();

        return view('almacen.articulo.create',compact('categorias'));
    }

    public function store(Request $request)
    {
        //Nuevo objeto
        $articulo = new Articulo;
        $articulo->id_categoria = $request->get('id_categoria');
        $articulo->codigo = $request->get('codigo');
        $articulo->nombre = $request->get('nombre');
        $articulo->slug = $request->get('slug');
        $articulo->stock = $request->get('stock');
        $articulo->descripcion = $request->get('descripcion');
        $articulo->estado = 'Activo';
        $articulo->condicion = '1';

        if (Input::hasFile('imagen')) //Si tiene imagen el campo imagen
        {
            $file = Input::file('imagen'); //Almacenar en $file el archivo
            $file->move(public_path().'/imagenes/articulos/', $file->getClientOriginalName()); //Guardamos la imagen y la movemos a la ruta con el nombre original
            $articulo->imagen = $file->getClientOriginalName();
        }

        $articulo->save();
        return redirect('almacen/articulo');
    }

    public function show($id)
    {
        $articulo = Articulo::findOrFail($id);
        return view('almacen.articulo.show',compact('articulo'));
    }

    public function edit($id)
    {
        $articulo = Articulo::findOrFail($id);
        //$categorias para el select form
        $categorias = DB::table('categoria')->where('condicion', '=', '1')->get();

        return view('almacen.articulo.edit',compact('articulo','categorias'));
    }

    public function update(Request $request, $id)
    {
        $articulo = Articulo::findOrFail($id);
        $articulo->id_categoria = $request->get('id_categoria');
        $articulo->codigo = $request->get('codigo');
        $articulo->nombre = $request->get('nombre');
        $articulo->slug = $request->get('slug');
        $articulo->stock = $request->get('stock');
        $articulo->descripcion = $request->get('descripcion');
        $articulo->estado = 'Activo';

        if (Input::hasFile('imagen')) //Si tiene imagen el campo imagen
        {
            $file = Input::file('imagen'); //Almacenar en $file el archivo
            $file->move(public_path().'/imagenes/articulos/', $file->getClientOriginalName()); //Guardamos la imagen y la movemos a la ruta con el nombre original
            $articulo->imagen = $file->getClientOriginalName();
        }

        $articulo->save();
        return redirect('almacen/articulo');

    }

    public function destroy($id)
    {
        $articulo = Articulo::findOrFail($id);
        $articulo->delete();
        return redirect('almacen/articulo');
    }

}