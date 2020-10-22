<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Office;
use Faker\Generator as Faker;

$factory->define(\App\Office::class, function (Faker $faker) {

    return [
        'Code'=> $faker->randomNumber(),
        'City'=> $faker->word,
        'Phone'=> $faker->word,
        'Address1'=> $faker->word,
        'Address2'=> $faker->word,
        'State'=> $faker->word,
        'Country'=> $faker->word,
        'PostalCode'=> $faker->randomNumber(),
        'Territory'=> $faker->word,
    ];
});
