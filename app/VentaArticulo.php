<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VentaArticulo extends Model
{
    protected $table = 'venta';
    protected $fillable = [ 

		//datos del cliente
		'nombreCliente',
		//datos del producto
		'nombreProducto',
		'precio',
		'cantidad',
		'subtotal',
		'total'
    ];
}
