<?php

use Faker\Generator as Faker;

$factory->define(App\Stockin::class, function (Faker $faker) {
    return [
		'document_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
		'product_id' => $faker->numberBetween($min = 1, $max = 100),
		'user_id' => 1,		
		'qty' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 5000),
		'other_details' => $faker->text
    ];
});
