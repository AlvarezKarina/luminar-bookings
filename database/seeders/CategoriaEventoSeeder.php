<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Importando el metodo de Categorias de evetos. 
use App\Models\CategoriaEvento;

class CategoriaEventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias_eventos = [
            ['nombre_categoria' => 'Deportes'],
            ['nombre_categoria' => 'Música'],
            ['nombre_categoria' => 'Arte'],
            ['nombre_categoria' => 'Cultura'],
            ['nombre_categoria' => 'Familiar'],
            ['nombre_categoria' => 'Gastronomía']
        ];

        CategoriaEvento::insert($categorias_eventos);
    }
}
