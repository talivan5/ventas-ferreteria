<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente'; //Tabla que hace referencia el Modelo

    protected $primaryKey = 'id'; //Atributo primaryKey de la tabla categoria

    protected $fillable = [
    	'nombre',
    	'apellidoM',
    	'apellidoP',
    	'direccion',
    	'celular',
    	'email'

    ];
}
