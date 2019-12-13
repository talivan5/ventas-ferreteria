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

  
Route::resource('/almacen/categoria', 'CategoriaController');

Route::resource('/almacen/articulo', 'ArticuloController');

Route::resource('/ventas/cliente', 'ClienteController');

Route::resource('/compras/proveedor', 'ProveedorController');

Route::resource('/compras/ingreso', 'IngresoController');

Route::get('articulo/{slug}',[
    'as'=>'articulo-detalle',
    'uses'=>'StoreController@show'
]);

Route::get('show',[
    'as'=>'cart-show',
    'uses'=>'CartController@show'
]);

Route::post('guardar/{item}','CartController@guardar');


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

Route::get('pdfventas',[
    'as'=>'reporte-ventas',
    'uses'=>'ReporteController@reporteventas']);


//Route::get('/home', 'HomeController@index')->name('home');
