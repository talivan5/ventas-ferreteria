<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;
class ReporteController extends Controller
{
    public function reporteuser()
    {
        $viewDatos = \View::make('reportes/reporte1');
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($viewDatos);
        return $pdf->stream();
    }
  
}
