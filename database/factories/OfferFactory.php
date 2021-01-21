<?php

use Faker\Generator as Faker;

$factory->define(App\Offer::class, function (Faker $faker) {
    return [
        'headline' => $faker->sentence(),
        'description' => $faker->sentence(),
        'cicle_id' => \App\Cicle::all()->random()->id,
        'date_max' => $faker->date(),
        'num_candidates' => $faker->number_format(),
    ];
});
