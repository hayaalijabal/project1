<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order_Product;
use Faker\Generator as Faker;

$factory->define(\App\Order_Product::class, function (Faker $faker) {

    return [
        'id'=> $faker->randomNumber(),
        'OrderID'=>\App\Order::all()->random(),
        'ProductCode'=>\App\Product::all()->random(),
        'Qty'=>$faker->randomNumber(),
        'PriceEach'=>$faker->randomNumber(),
    ];
});
