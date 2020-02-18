<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::bind('articulo',function($slug){
    return App\Articulo::where('slug',$slug)->first();
});

Route::get('/',[
    'as'=>'/',
    'uses'=>'StoreController@index']);

Route::get('inicio',[
    'as'=>'inicio',
    'uses'=>'StoreController@inicio']);
    
Route::get('inicioAdmin',[
    'as'=>'inicioAdmin',
    'uses'=>'StoreController@inicioAdmin']);

Route::get('categorias', 'StoreController@getCategorias');
Route::get('articulos/{id}', 'StoreController@getArticulos');

Route::get('abrirModal/{id}','StoreController@getModal');

Route::get('cliente/categoria',[
    'as'=>'cliente/categoria',
    'uses'=>'CategoriaController@indexcliente']);


//menu
Route::get('menus', 'CategoriaController@menus');


//registro del producto

Route::post('/compras/registro/', 'DetalleCompraController@store')->name('reproducto.store');
Route::get('/compras/registro/', 'DetalleCompraController@create')->name('guarda');
//registro del cliente
Route::post('/compras/registro/cliente', 'DetalleCompraController@storecli')->name('rcliente.store');
Route::get('/compras/registro/cliente', 'DetalleCompraController@createcli')->name('guardacliente');


//registro de categorias
Route::resource('/almacen/categoria', 'CategoriaController');

//Route::resource('/almacen/articulo', 'ArticuloController');
Route::get('/almacen/articulo/', 'ArticuloController@index');
Route::post('/almacen/articulo/', 'ArticuloController@store')->name('articulo.store');
Route::get('/almacen/articulo/create', 'ArticuloController@create')->name('articulo.create');
Route::get('/almacen/articulo/{id}', 'ArticuloController@show');
Route::delete('/almacen/articulo/{id}', 'ArticuloController@destroy')->name('articulo.destroy');
Route::put('/almacen/articulo/{id}', 'ArticuloController@update')->name('articulo.update');
Route::get('/almacen/articulo/{id}/edit', 'ArticuloController@edit')->name('articulo.edit');

Route::resource('/ventas/cliente', 'ClienteController');

Route::resource('/compras/proveedor', 'ProveedorController');

Route::get('articulo/{slug}',[
    'as'=>'articulo-detalle',
    'uses'=>'StoreController@show'
]);

Route::get('show','CartController@show')->name('cart-show');

//Route::post('guardar/{item}','CartController@guardar');


Route::get('cart/add/{articulo}',[
    'as' => 'cart-add',
    'uses' => 'CartController@add'
]);

Route::get('cart/delete/{articulo}',[
    'as' => 'cart-delete',
    'uses' => 'CartController@delete'
]);

Route::get('cart/trash',[
    'as' => 'cart-trash',
    'uses' => 'CartController@trash'
]);

Route::get('cart/update/{articulo}/{cantidad?}',[
    'as' => 'cart-update',
    'uses' => 'CartController@update'
]);


Route::get('order-detail',[
    'as'=>'order-detail',
    'uses'=>'CartController@orderDetail']);

Auth::routes();

//Rutas de los reportes
Route::get('imprimir',[
    'as'=>'imprimir',
    'uses'=>'CartController@imprimirDedalle']);

Route::get('pdf',[
    'as'=>'reporte-articulo',
    'uses'=>'ReporteController@reportearticulos']);

Route::get('pdfuser',[
    'as'=>'reporte-user',
    'uses'=>'ReporteController@reporteuser']);

Route::get('pdfventas','ReporteController@reporteventas')->name('reporte-ventas');

Route::get('pdfcompra',[
    'as'=>'reporte-compra',
    'uses'=>'ReporteController@reportecompra']);

Route::get('pdfproducto','ReporteController@cantidadCompra')->name('cantidad'); 
//Route::get('/home', 'HomeController@index')->name('home');
