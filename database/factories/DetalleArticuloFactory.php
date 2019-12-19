<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DetalleIngreso;
use Faker\Generator as Faker;

$factory->define(DetalleIngreso::class, function (Faker $faker) {
    return [
        'id_articulo' => function(){
            return App\Articulo::all()->random();
        },
        'id_users' => '1',
        'cantidad' => rand(5,250),
        'subtotal' => rand(5,250),
        'total' => rand(5,250),        
    ];
});
