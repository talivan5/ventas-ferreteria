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
    'as'=>'home',
    'uses'=>'StoreController@index']);

Route::resource('/almacen/categoria', 'CategoriaController');

Route::resource('/almacen/articulo', 'ArticuloController');

Route::resource('/ventas/cliente', 'ClienteController');

Route::resource('/compras/proveedor', 'ProveedorController');

Route::resource('/compras/ingreso', 'IngresoController');

Route::get('articulo/{slug}',[
    'as'=>'articulo-detalle',
    'uses'=>'StoreController@show'
]);

Route::get('cart/show',[
    'as'=>'cart-show',
    'uses'=>'CartController@show'
]);

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