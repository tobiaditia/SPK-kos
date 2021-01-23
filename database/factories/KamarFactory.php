<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kamar;
use Faker\Generator as Faker;

$factory->define(Kamar::class, function (Faker $faker) {
    return [
        'id_kos' => $faker->numberBetween(1,10),
        'nama' => $faker->lastName ,
        'kapasitas' => $faker->numberBetween(1,4),
        'harga' => $faker->randomElement(array (100000, 200000, 250000, 500000, 1000000, 2500000)),
        'pembayaran' => $faker->randomElement(array ('perhari', 'perminggu', 'perbulan')),
    ];
});
