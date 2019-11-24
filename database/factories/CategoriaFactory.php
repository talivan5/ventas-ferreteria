<?php

use Faker\Generator as Faker;

$factory->define(App\Categoria::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstName,
        'slug' => $faker->sentence,
        'descripcion' => $faker->word(),
        'condicion' => 1
    ];
});
