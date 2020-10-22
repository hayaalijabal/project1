<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(\App\Customer::class, function (Faker $faker) {
    return [
        'id'=> $faker->randomNumber(5),
        'SalesRepEmployeeNum'=>\App\Employee::all()->random(),
        'Name'=> $faker->word,
        'LastName'=> $faker->word,
        'FirstName'=> $faker->word,
        'Phone'=> $faker->word,
        'Address1'=> $faker->word,
        'Address2'=> $faker->word,
        'City'=> $faker->word,
        'State'=> $faker->word,
        'PostalCode'=> $faker->randomNumber(4),
        'Cuntry'=> $faker->word,
        'CreditLimit'=> $faker->randomNumber(4),
    ];
});
