<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'id' => $faker->randomNumber(),
        'OfficeCode' =>\App\Office::all()->random(),
        'reportsTo' => $faker->randomNumber(),
        'LastName' => $faker->word,
        'FirstName' => $faker->word,
        'Extension' => $faker->word,
        'Email' => $faker->word,
        'JobTitle' => $faker->word,
    ];
});
