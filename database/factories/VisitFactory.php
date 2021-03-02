<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Visit::class, function (Faker $faker) {
    return [
        'practitioner_id' => mt_rand(1, 587),
        'visit_state_id' => mt_rand(1, 2),
        'date' => $faker->dateTimeBetween('-5 days', '+5 days'),
        'visited' => $faker->boolean,
        'address' => $faker->streetAddress,
        'postal_code' => $faker->postcode,
        'city' => $faker->city
    ];
});
