<?php

namespace Database\Seeders;

use App\Models\Genero;
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
        // \App\Models\User::factory(10)->create();
        
        $genero1 = new Genero();

        $genero1->sexo = "Masculino";
        $genero1->save();

        $genero2 = new Genero();

        $genero2->sexo = "Femenino";
        $genero2->save();
    }
}
