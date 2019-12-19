<?php

namespace App\Http\Controllers;
use App\Articulo;
use App\DetalleIngreso;
use App\User;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{
    public function reporteuser()
    {
        $user=User::all();
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
        $detalleingreso = DetalleIngreso::all();
        $viewDatos = \View::make('reportes/porventa',compact('detalleingreso'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($viewDatos);
        return $pdf->stream();
    }
    public function reportecompra()
    {
        $detallesql = DetalleIngreso::all();        
        $detallesql = DB::table('detalle_ingreso')
        ->join('users', 'detalle_ingreso.id_users', '=' ,'users.id')
        ->join('articulo', 'detalle_ingreso.id_articulo', '=' ,'articulo.id')
        ->select('users.name', 'articulo.nombre','articulo.codigo', 'detalle_ingreso.cantidad', 'detalle_ingreso.subtotal', 'detalle_ingreso.total' )
        ->get();
        $viewDatos = \View::make('reportes/porcompra',compact('detallesql'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($viewDatos);
        return $pdf->stream();
    }
  
}
