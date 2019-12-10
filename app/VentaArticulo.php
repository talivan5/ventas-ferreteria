<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VentaArticulo extends Model
{
    protected $table = 'detalle_venta';
    protected $fillable = [ 

    	'id_articulo',
    	'cantidad',
		'subtotal',
		'total'
    ];
}
