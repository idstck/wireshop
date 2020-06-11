<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->word(),
        'description' => $faker->text(120),
        'price' => $faker->numberBetween(10000, 100000),
        'image' => ''
    ];
});
