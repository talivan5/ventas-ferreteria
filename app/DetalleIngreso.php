<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleIngreso extends Model
{
    protected $table = 'detalle'; 

    protected $primaryKey = 'id';

    protected $fillable = [
        'id_articulo',
        'id_users',
    	'cantidad',
    	'subtotal',
    	'total'

    ];
}
