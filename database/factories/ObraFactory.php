<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Obra;
use Faker\Generator as Faker;

$factory->define(Obra::class, function (Faker $faker) {
    return [
        'categoria_id' => $faker->numberBetween($min = 1, $max = 3),

    ];
});
