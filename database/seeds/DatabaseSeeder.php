<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(NoticiaTableSeeder::class);
        $this->call(EventoTableSeeder::class);
        $this->call(ConvocatoriaTableSeeder::class);
        $this->call(PresentacionTableSeeder::class);
        $this->call(ExperienciaTableSeeder::class);
    }
}
