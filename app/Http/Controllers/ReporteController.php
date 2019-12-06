<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;
use App\DetalleIngreso;
use App\User;
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
  
}
