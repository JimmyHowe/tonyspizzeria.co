<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Address::class, function (Faker\Generator $faker) {
    return [
        'flat' => '3/2',
        'street' => $faker->address,
        'postcode' => $faker->postcode,
        'notes' => $faker->paragraph,
    ];
});

$factory->define(App\PhoneNumber::class, function (Faker\Generator $faker) {
    return [
        'number' => $faker->numerify('0141#######'),
        'notes' => $faker->sentence
    ];
});

$factory->define(App\Order::class, function (Faker\Generator $faker) {
    return [
        'user_id' => rand(0, 9),
        'status' => (rand(0, 9) % 2 == 0) ? "processing" : "complete"
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'prices' => [ 'small' => 1.00, 'medium' => 2.00, 'large' => 3.00 ],
        'options' => [ 'vegetarian' => true ]
    ];
});