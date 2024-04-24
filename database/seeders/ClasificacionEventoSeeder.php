<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Importando modelo a utilizar
use App\Models\ClasificacionEvento;

class ClasificacionEventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clasificacion_eventos = [
            ['nombre_clasificacion' => 'A'],
            ['nombre_clasificacion' => 'B'],
            ['nombre_clasificacion' => 'C']
        ];

        ClasificacionEvento::insert($clasificacion_eventos);

    }
}
