<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

        $factory->define(\App\Product::class, function (Faker $faker) {
            return [
                'Code' => $faker->randomNumber(),
                'ProductlineID' =>\App\Productline::all()->random(),
                'Name' => $faker->word,
                'Scale' => $faker->randomNumber(),
                'vendor'=> $faker->word,
                'PdtDescription'=> $faker->word,
                'QtyInStock'=> $faker->randomNumber(),
                'BuyPrice'=> $faker->randomNumber(),
                'MSRP'=> $faker->randomNumber(),


            ];
    });
