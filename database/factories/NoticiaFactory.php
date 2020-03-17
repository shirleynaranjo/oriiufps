<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Noticia;
use Illuminate\Support\Str as Str;
use Faker\Generator as Faker;

$factory->define(Noticia::class, function (Faker $faker) {

    $tituloNoticia = $faker->sentence($nbWords = 6, $variableNbWords = true);
    $slug = Str::slug($tituloNoticia,'-');

    return [
        'tituloNoticia' => $tituloNoticia,
        'fechaPublicacion' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'descripcionNoticia' => $faker->text($maxNbChars = 1000),
        'imagen' => $faker->imageUrl($width =400, $height = 280),
        'imagenInicio'=> $faker->imageUrl($width =1900, $height = 550),
        'video' => $faker->imageUrl($width = 640, $height = 480),
        'slug'=> $slug,
    ];
});
