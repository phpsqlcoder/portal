<?php

use Faker\Generator as Faker;

$factory->define(App\Patients::class, function (Faker $faker) {
    return [
        'fname' => $faker->firstName,
        'lname' => $faker->lastName,
        'mname' => $faker->lastName,
        'extname' => $faker->suffix,
        'gender' => $faker->randomElement($array = array ('male','female')),
        'birthdate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'address' => $faker->address,
        'contact_no' => $faker->phoneNumber,
        'civil_status' => $faker->randomElement($array = array ('single','married')),
        'occupation' => $faker->jobTitle,
        'referral' => $faker->name,
        'images' => $faker->imageUrl($width = 640, $height = 480)."|".$faker->imageUrl($width = 640, $height = 480)."|".$faker->imageUrl($width = 640, $height = 480)."|".$faker->imageUrl($width = 640, $height = 480),
        'user_id' => 1
    ];
});
