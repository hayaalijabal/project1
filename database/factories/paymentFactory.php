<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use Faker\Generator as Faker;

$factory->define(\App\Payment::class, function (Faker $faker) {
    return [
        'CheckNum'=> $faker-> word,
        'CustomerID'=>\App\Customer::all()->random(),
        'PaymentDate'=> now(),
        'Amount'=>$faker->randomNumber(),
    ];
});
