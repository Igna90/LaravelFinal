<?php

use Faker\Generator as Faker;

$factory->define(App\Applied::class, function (Faker $faker) {
    return [
        
        'user_id' => \App\User::all()->random()->id,
        'offer_id' => \App\Offer::all()->random()->id,
        
    ];
});
