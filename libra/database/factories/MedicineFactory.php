<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Medicine;
use Faker\Generator as Faker;

$factory->define(Medicine::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'tablets' => rand(1, 3),
    ];
});
