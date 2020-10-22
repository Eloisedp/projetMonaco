<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'price' => $faker->numberBetween(50, 150),
        'description' => $faker->text,
        'dimensions' => $faker->text,
    ];
});
