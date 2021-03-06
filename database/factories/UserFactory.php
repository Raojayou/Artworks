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
    /**
     * Nombre, Apellido y los ordena añadiendole un punto. (Nombre.Apellido)
     */
    $name = $faker->name;
    $lastName = $faker->lastName;
    $username = str_replace(" ", ".", $name . "." . $lastName);
    $usernamedef = str_replace("..", ".", $username);

    /**
     * Información que rellena el faker.
     */
    return [
        'name' => $name,
        'lastName' => $lastName,
        'username' => $usernamedef,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->e164PhoneNumber,
        'website' => $faker->url,
        'about' => $faker->realText(200),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'avatar' => 'https://picsum.photos/150/150/?random',
        'remember_token' => str_random(10),
    ];
});
