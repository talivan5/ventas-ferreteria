<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Articulo;
use App\VentaArticulo;
use App\Cliente;


class DetalleCompraController extends Controller
{
    public function __construct(){
        if(!\Session::has('cart'))\Session::put('cart',array());
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
    public function createcli()
    {   
        return view('compras.registro.recliente');
    }
    public function create()
    {   
        $cart = \Session::get('cart');
        $total=$this->total();
        return view('compras.registro.reproducto',compact('cart','total'));
    }

    public function store(Request $request)
    {
        $venta = new VentaArticulo;
        
        $venta->nombreCliente = $request->nombreCliente;        
        $venta->nombreProducto = $request->nombreProducto;
        $venta->precio = $request->precio;
        $venta->cantidad = $request->cantidad;
        $venta->subtotal = $request->subtotal;
        $venta->total = $request->total;
        $venta->save();
        
       return redirect()->route('guarda');
    }

    public function storecli(Request $request)
    {
        
        $cliente = new Cliente;       
        $cliente->nombre = $request->nombre;
        $cliente->apellidoM = $request->apellidoM;
        $cliente->apellidoP = $request->apellidoP;
        $cliente->direccion = $request->direccion;
        $cliente->celular = $request->celular;
        $cliente->email = $request->email;
    	$cliente->save();       
        
        
       return redirect()->route('guarda');
    }

   
}
