<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Convocatoria;
use Faker\Generator as Faker;

$factory->define(Convocatoria::class, function (Faker $faker) {
    return [
        'nombreConvocatoria' => $faker->sentence($nbWords = 5, $variableNbWords = true),
        'oferenteConvocatoria' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'vigenciaConvocatoria' => $faker->date($format = 'Y-m-d'),
        'informacionConvocatoria' => $faker->word(),
        'estadoConvocatoria' => $faker->boolean(),            
    ];
});
