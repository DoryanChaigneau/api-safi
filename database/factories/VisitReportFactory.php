<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\VisitReport::class, function (Faker $faker) {
    return [
        'content' => $faker->realText('255'),
        'satisfaction' => mt_rand(1,5)
    ];
});
