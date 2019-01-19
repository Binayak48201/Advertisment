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
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Advertisment::class, function ($faker) {
    return [
    	'channel_id' => function () {
    		return factory('App\Channel')->create()->id;
    	},
        'title' => $faker->paragraph,
        'place' => $faker->paragraph,
        'direct' => $faker->name,
        'discount' => $faker->randomDigit,
        'count_down' => $faker->randomDigit,
        'str_price' => $faker->randomDigit,
        'price' => $faker->randomDigit,
        'body' => $faker->paragraph,
    ];
});
