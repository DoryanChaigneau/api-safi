<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Employee::class, function (Faker $faker) {
    $fname = \App\Utils::replace_accent(ucfirst($faker->firstName));
    $lname = \App\Utils::replace_accent(strtoupper($faker->unique()->lastName));
    $login = strtolower($fname[0] . $lname);
    return [
        'employee_type_id' => mt_rand(1, 3),
        'district_id' => mt_rand(1, 18),
        'firstname' => $fname,
        'lastname' => $lname,
        'login' => $login,
        'password' => hash('SHA512', 'pwsio'),
        'address' => $faker->streetAddress,
        'postal_code' => $faker->postcode,
        'city' => $faker->city,
        'phone' => $faker->city,
        'hireDate' => $faker->date('Y-m-d'),
        'activated' => $faker->boolean
    ];
});
