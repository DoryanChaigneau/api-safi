<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Practitioner::class, function (Faker $faker) {
    return [
        'district_id' => mt_rand(1, 18),
        'lastname' => strtoupper($faker->lastName),
        'firstname' => ucfirst($faker->firstName),
        'address' => $faker->streetAddress,
        'tel_fixed' => $faker->phoneNumber,
        'tel_portable' => $faker->phoneNumber,
        'profession' => 'Médecin',
        'website' => $faker->url,
        'email' => $faker->email
    ];
});
