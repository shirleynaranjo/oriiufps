<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Noticia;
use Faker\Generator as Faker;

$factory->define(Noticia::class, function (Faker $faker) {
    return [
        'tituloNoticia' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'fechaPublicacion' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'descripcionNoticia' => $faker->text($maxNbChars = 200),
        'imagen' => $faker->imageUrl($width =400, $height = 280),
        'video' => $faker->imageUrl($width = 640, $height = 480),
    ];
});
