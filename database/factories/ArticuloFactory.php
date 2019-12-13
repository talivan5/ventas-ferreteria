<?php

use Faker\Generator as Faker;

$factory->define(App\Articulo::class, function (Faker $faker) {
    return [        
        'id_categoria' => function(){
            return App\Categoria::all()->random();
        },
        'codigo' => 'unique:ean8',
        'nombre' => $faker->word(),
        'slug' => $faker->sentence,
        'stock' => rand(5,250),
        'descripcion' => $faker->sentence(3),
        'imagen' => $faker->imageUrl(),
        'estado'=>'Activo',
        'condicion' => 1
        

    ];
});
