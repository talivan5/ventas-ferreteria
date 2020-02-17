<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Articulo;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\CategoriaFormRequest;

class CategoriaController extends Controller
{
    public function __construct()
    {

    }
    public function indexcliente(Request $request)
    {
		$categorias = DB::table('categoria')
			->join('articulo','categoria.id','=','articulo.id_categoria')
			->select('articulo.imagen','articulo.nombre','articulo.slug',
						'articulo.stock','categoria.nombre as categoria')
			->orderBy('categoria.nombre', 'ASC')					
			->paginate(6);

		return view('cliente.categoria',compact('categorias'));
	}
	public function menus(Request $request)
	{
		$menus = DB::table('categoria')
				->select('nombre')
				->groupBy('nombre', 'ASC')
				->get();

		return redirect('tema.asider',compact('menus'));

	}
    public function index(Request $request)
    {
    	if ($request)
    	{
           
    		$query = trim($request->input('searchText'));

    		$categorias = Categoria::where('nombre', 'LIKE', "%$query%")
    			->where('condicion','=','1')
    			->orderBy('id', 'ASC')
                ->paginate(5);

    		return view('almacen.categoria.index', [
				'categorias'=>$categorias, 
				'searchText'=>$query
			]);
    	}
    }

    public function create()
    {
    	return view('almacen.categoria.create');
    }

    public function store(Request $request)
    {
    	$categoria = new Categoria;
        $categoria->nombre = $request->nombre;
    	$categoria->descripcion = $request->descripcion;
    	$categoria->condicion = '1';
    	$categoria->save();

    	return redirect('almacen/categoria');
    }

    public function show($id)
    {
    	$categoria = Categoria::findOrFail($id);
    	return view('almacen.categoria.show', ['categoria'=>$categoria]);
    }

    public function edit($id)
    {
    	$categoria = Categoria::findOrFail($id);
    	return view('almacen.categoria.edit', ['categoria'=>$categoria]);
    }

    public function update(Request $request, $id)
    {
    	$categoria = Categoria::findOrFail($id);
        $categoria->nombre = $request->nombre;
    	$categoria->descripcion = $request->descripcion;
    	$categoria->update();

    	return redirect('almacen/categoria');
    }

    public function destroy($id)
    {
    	$categoria = Categoria::findOrFail($id);
    	$categoria->condicion = '0';
    	$categoria->update();

    	return redirect('almacen/categoria');
	}

}
