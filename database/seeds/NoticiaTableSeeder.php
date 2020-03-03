<?php

use App\Models\Noticia;
use Illuminate\Database\Seeder;

class NoticiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Noticia::truncate();
        factory(Noticia::class,5)->create();
    }
}
