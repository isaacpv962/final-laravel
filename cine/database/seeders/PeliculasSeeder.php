<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Pelicula;

class PeliculasSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            Pelicula::create([
                'titulo' => $faker->sentence,
                'genero' => $faker->word,
                'sinopsis' => $faker->paragraph,
                'fecha_estreno' => $faker->date('Y-m-d'),
            ]);
        }
    }
}
