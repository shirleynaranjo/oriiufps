<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Evento;
use Faker\Generator as Faker;

$factory->define(Evento::class, function (Faker $faker) {
    return [
        'tituloEvento' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'lugarEvento' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'fechaEvento' => $faker->date($format = 'Y-m-d'),
        'horaEvento' => $faker->time($format = 'H:i'),
        'descripcionEvento' => $faker->text($maxNbChars = 200),
        'imagen' => $faker->imageUrl($width = 640, $height = 480),
        'archivoPDF'=>$faker->sentence($nbWords = 0),
        'estadoEvento'=>$faker->boolean(),
        'imagenMiniatura' => $faker->imageUrl($width = 262, $height = 100),

    ];
});
