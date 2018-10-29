<?php

use Faker\Generator as Faker;

$factory->define(\App\car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement([$array = array('ford', 'honda', 'toyota')]),
        'model' => $faker->randomElement([$array = array('Sedan', 'Xuv', 'coupe')]),
        'year' => $faker->randomElement([$array = array('2012', '2010', '2011','2014')]),
        //'model'=> $faker->randomElement([$array = array('figo', 'city', 'corolla')]),
        //'year' => $faker->randomElement([$array = array('2012', '2010','2011')]),
    ];
});
