<?php

use Faker\Generator as Faker;

$factory->define(App\Products::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'brand' => $faker->word,
        'cost' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 5000),
        'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 5000)
    ];
});
