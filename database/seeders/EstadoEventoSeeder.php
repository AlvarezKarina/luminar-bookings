<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Importando el metodo que se va a utilizar
use App\Models\EstadoEvento;

class EstadoEventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estado_eventos =[
            ['nombre_estado' => 'Finalizado'],
            ['nombre_estado' => 'Reprogramado'],
            ['nombre_estado' => 'En curso'],
            ['nombre_estado' => 'Próximo'],
            ['nombre_estado' => 'Cancelado']
        ];

        EstadoEvento::insert($estado_eventos);

    }
}
