<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Productline;
use Faker\Generator as Faker;

$factory->define(\App\Productline::class, function (Faker $faker) {
    return [
        'id'=> $faker->randomNumber(),
        'DescInText'=> $faker->word,
        'DescInHTML'=> $faker->word,
        'Image'=> $faker->image()
    ];
});
