<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kos;
use Faker\Generator as Faker;

$factory->define(Kos::class, function (Faker $faker) {
    return [
        'nama' => strtok($faker->name, ' ').' Kos',
        'id_lokasi' => 10,
        'deskripsi' =>$faker->realText(200),
        'no_hp' => $faker->e164PhoneNumber

    ];
});
