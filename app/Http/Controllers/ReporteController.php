<?php

namespace App\Http\Controllers;
use App\Articulo;
use App\DetalleIngreso;
use App\User;
use App\VentaArticulo;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{
    public function reporteuser()
    {
        $user= User::all();
        $user = DB::table('role_user')
        ->join('users', 'role_user.id', '=' ,'users.id')
        ->join('roles','role_user.role_id', '=' ,'roles.id')
        ->select('users.name', 'users.email','roles.name', 'roles.description')
        ->get();
        $viewDatos = \View::make('reportes/porusuario',compact('user'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($viewDatos);
        return $pdf->stream();
    }
    public function reportearticulos()
    {
        $articulo=Articulo::all();
        $viewDatos = \View::make('reportes/porarticulo',compact('articulo'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($viewDatos);
        return $pdf->stream();
    }
    public function reporteventas()
    {
        $detalleingreso = VentaArticulo::all();
        $viewDatos = \View::make('reportes/porventa',compact('detalleingreso'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($viewDatos);
        return $pdf->stream();
    }
    public function reportecompra()
    {
        $detallesql = DetalleIngreso::all();        
        $detallesql = DB::table('detalle')
        ->join('users', 'detalle.id_users', '=' ,'users.id')
        ->join('articulo', 'detalle.id_articulo', '=' ,'articulo.id')
        ->select('users.name', 'articulo.nombre','articulo.codigo', 'detalle.cantidad', 'detalle.subtotal', 'detalle.total' )
        ->get();
        $viewDatos = \View::make('reportes/porcompra',compact('detallesql'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($viewDatos);
        return $pdf->stream();
    }
    
    public function cantidadCompra()
    {
     $compracliente = VentaArticulo::all();
     $compracliente = DB::table('venta')
     //->groupBy('nombreProducto')
     ->select('venta.nombreCliente','venta.nombreProducto','venta.precio','venta.cantidad','venta.subtotal')
     ->orderBy('venta.nombreCliente')
     ->get();
     $viewDatos = \View::make('reportes/porarticulouser',compact('compracliente'));
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($viewDatos);
     return $pdf->stream();
    }
}
