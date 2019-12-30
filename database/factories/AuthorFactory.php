<?php

use Faker\Generator as Faker;

$factory->define(App\Author::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'address' => $faker->paragraph,
    ];
});
