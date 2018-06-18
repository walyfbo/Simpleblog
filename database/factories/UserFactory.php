<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Noticia::class, function (Faker $faker) {
    return [
        'titulo' => $faker->sentence(15),
        'texto' => $faker->sentence(500),
        'autor' => $faker->name
    ];
});
