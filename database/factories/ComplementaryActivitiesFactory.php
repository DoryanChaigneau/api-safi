<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\ComplementaryActivities::class, function (Faker $faker) {
    return [
        'employee_id' => mt_rand(1, 252),
        'number_max' => mt_rand(5, 20),
        'date' => $faker->dateTimeBetween('-20 days', '+30 days'),
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'postal_code' => $faker->postcode,
        'theme' => $faker->realText('50'),
        'accepted' => $faker->boolean
    ];
});
