<?php

use Faker\Generator as Faker;

$factory->define(App\Services::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 5000)
    ];
});
