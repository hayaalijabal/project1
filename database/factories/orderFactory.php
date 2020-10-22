<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(\App\Order::class, function (Faker $faker) {
    return [
        'id'=> $faker->randomNumber(),
        'CustomerId'=>\App\Customer::all()->random(),
        'OrderDate'=> now(),
        'RequiredDate'=> now(),
        'ShippedDate'=> now(),
        'Status'=> $faker->randomNumber(),
        'Comments'=> $faker->word,
    ];
});
