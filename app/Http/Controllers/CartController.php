<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ArticuloFormRequest;
use App\Articulo;
use App\VentaArticulo;
use Illuminate\Support\Facades\Auth;
use DB;
use SebastianBergmann\Environment\Console;

class CartController extends Controller
{
    public function __construct(){
        if(!\Session::has('cart'))\Session::put('cart',array());
    }
   
    public function show()
    {
        $cart = \Session::get('cart');
        $total= $this->total();
        return view('almacen.articulo.cart',compact('cart','total'));
    }

    public function add(Articulo $art)
    {
        $cart = \Session::get('cart');
        $art->cantidad = 1 ;
        $cart[$art->slug]=$art;

        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }
    public function delete(Articulo $art)
    {
        $cart=\Session::get('cart');
        unset($cart[$art->slug]);
        \Session::put('cart', $cart);
        return redirect()->route('cart-show');

    }
    public function update(Articulo $art, $cantidad)
    {
        $cart = \Session::get('cart');

        $cart[$art->slug]->cantidad = $cantidad;
        
        \Session::put('cart', $cart);
        
        return redirect()->route('cart-show');

    }

    public function trash()
    {
        \Session::forget('cart');
        
        return redirect()->route('cart-show');

    }
    private function total()
    {
        $cart = \Session::get('cart');
        $total=0;
        foreach($cart as $item){
            $total+=$item->stock * $item->cantidad;
        }
        return $total;
    }
    public function orderDetail()
    {
        if(count(\Session::get('cart'))<=0) return redirect()->route('home');
        $cart = \Session::get('cart');
        $total=$this->total();

        return view('almacen.articulo.order-detail',compact('cart','total'));
    }
    public function imprimirDedalle()
    {
        $users= Auth::user();
              
        if(count(\Session::get('cart'))<=0) return redirect()->route('home');
        $cart = \Session::get('cart');
        $total=$this->total();

        return view('reportes.imprimir',compact('cart','total','users'));
    }
    public function guardar(Request $request){
        dd($request);
        $venta = new VentaArticulo;
        $venta->id_articulo = $request->id_articulo;
        $venta->cantidad = $request->cantidad;
    	$venta->subtotal = $request->subtotal;
    	$venta->total = $request->total;
    	$venta->save();       
   
        return view('ventas.save',compact('venta'));
        //return view('ventas.save');
    }

}
