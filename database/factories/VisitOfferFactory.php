<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\VisitOffer::class, function (Faker $faker) {
    return [
        'medicine_id' => mt_rand(1, 27),
        'price' => mt_rand(1,80),
        'quantity' => mt_rand(1,8)
    ];
});
