<?php

use App\Models\Evento;
use Illuminate\Database\Seeder;

class EventoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evento::truncate();
        factory(Evento::class,5)->create();
    }
}
