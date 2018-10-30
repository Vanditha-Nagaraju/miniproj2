<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement(['ford', 'honda', 'toyota']),
        'model' => $faker->randomElement(['Sedan', 'Xuv', 'coupe']),
        'year' => $faker->randomElement(['2012', '2010', '2011','2014']),

    ];
});
