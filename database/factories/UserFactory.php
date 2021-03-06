<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'surname' => $faker->name,
        'cicle_id' => \App\Cicle::all()->random()->id,
        'actived' => $faker->boolean = false,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => $faker->safeEmail,
        'type' => $faker->sentence,
        'num_offer_applied' => $faker->randomDigit,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
