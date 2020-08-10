<?php

use Faker\Generator as Faker;
use App\Patients;

$factory->define(App\Patient_details::class, function (Faker $faker) {
    return [      
        'patient_id' => Patients::all()->random()->id, 
        'pmh_hpn' => $faker->randomElement($array = array ('yes','no')),
        'pmh_dm' => $faker->randomElement($array = array ('yes','no')),
        'pmh_ba' => $faker->randomElement($array = array ('yes','no')),
        'pmh_ca' => $faker->randomElement($array = array ('yes','no')),
        'pmh_heart_disease' => $faker->randomElement($array = array ('yes','no')),
        'pmh_operation' => $faker->randomElement($array = array ('yes','no')),
        'psh_smoking' => $faker->randomElement($array = array ('yes','no')),
        'psh_alcohol' => $faker->randomElement($array = array ('yes','no')),
        'fmh_similar_lesions' => $faker->randomElement($array = array ('yes','no')),
        'fmh_ca' => $faker->randomElement($array = array ('yes','no')),
        'allergy' => $faker->word,
        'soap' => $faker->word,
        'shampoo' => $faker->word,
        'lotion' => $faker->word,
        'perfume' => $faker->word,
        'detergent' => $faker->word,
        'fabric_softener' => $faker->word,
        'lmp' => $faker->randomElement($array = array ('yes','no')),
        'pmp' => $faker->randomElement($array = array ('yes','no')),
        'pregnant_plans' => $faker->randomElement($array = array ('yes','no')),
        'user_id' => 1
    ];
});
