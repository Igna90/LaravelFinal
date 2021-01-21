<?php

use Faker\Generator as Faker;

$factory->define(App\Requirement::class, function (Faker $faker) {
    return [
        'description' => $faker->sentence,
        'offer_id' => \App\Offer::all()->random()->id,
    ];
});
