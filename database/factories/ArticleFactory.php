<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        
        'title' => $faker->sentence,
        'description' => $faker->sentence,
        'image' => $faker->sentence,
        'cicle_id' => \App\cicle::all()->random()->id,
    ];
});
