<?php

use App\Models\Convocatoria;
use Illuminate\Database\Seeder;

class ConvocatoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Convocatoria::truncate();
        factory(Convocatoria::class,5)->create();
    }
}
