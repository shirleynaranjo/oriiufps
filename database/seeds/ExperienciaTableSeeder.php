<?php

use App\Models\Experencia;
use Illuminate\Database\Seeder;

class ExperienciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Experencia::truncate();
        
        $experiencia=new Experencia();
        $experiencia->descripcionExperiencia="Disponibles los Servicios Bienestar Universitario - primer semestre 2020";
        $experiencia->enlace="https://www.youtube.com/embed/HQBN0DUapz8";
        $experiencia->save();

        $experiencia=new Experencia();
        $experiencia->descripcionExperiencia="La UFPS sede de movilidad académica de estudiantes de distintas nacionalidades";
        $experiencia->enlace="https://www.youtube.com/embed/G4ba3V4sztg";
        $experiencia->save();

        $experiencia=new Experencia();
        $experiencia->descripcionExperiencia="Esudiantes de Química Industrial realizaron movilidad académica en México";
        $experiencia->enlace="https://www.youtube.com/embed/SvRWbfg0uvA";
        $experiencia->save();

        $experiencia=new Experencia();
        $experiencia->descripcionExperiencia="Estudiante de Comunicación Social cuenta su experiencia de movilidad internacional";
        $experiencia->enlace="https://www.youtube.com/embed/Fbw56MuPb_o";
        $experiencia->save();

    }

}
