<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Invite::class, function (Faker $faker) {
    return [
        'invited_id' => mt_rand(1, 252),
        'accepted' => $faker->boolean
    ];
});
