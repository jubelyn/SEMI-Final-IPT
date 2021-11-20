<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Store;
use Faker\Generator as Faker;

$factory->define(Store::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'location' => $faker->address,
        'owner' => $faker->name,
        'net_worth' => $faker->numberBetween(1,10000)
    ];
});
