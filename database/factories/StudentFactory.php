<?php

use App\Student;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'upn' => $faker->stateAbbr . $faker->unique()->bothify('#######'),
        'surname' => $faker->unique()->lastName,
        'forename' => $faker->unique()->firstName(),
        'year' => $faker->numberBetween(7,11),
        'reg' => $faker->numberBetween(7,11) . $faker->stateAbbr,
    ];
});
