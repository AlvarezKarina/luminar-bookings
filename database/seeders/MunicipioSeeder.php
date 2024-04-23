<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Importando el modelo de Municipio
use App\Models\Municipio;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        $municipios =[
            ['nombre_municipio' => 'Ahuachapán Norte', 'departamento_id' => 1],
            ['nombre_municipio' => 'Ahuachapán Centro', 'departamento_id' => 1],
            ['nombre_municipio' => 'Ahuachapán Sur', 'departamento_id' => 1],
            ['nombre_municipio' => 'Cabañas Este', 'departamento_id' => 2],
            ['nombre_municipio' => 'Cabañas Oeste', 'departamento_id' => 2],
            ['nombre_municipio' => 'Chalatenango Norte', 'departamento_id' => 3],
            ['nombre_municipio' => 'Chalatenango Centro', 'departamento_id' => 3],
            ['nombre_municipio' => 'Chalatenango Sur', 'departamento_id' => 3],
            ['nombre_municipio' => 'Cuscatlán Norte', 'departamento_id' => 4],
            ['nombre_municipio' => 'Cuscatlán Sur', 'departamento_id' => 4],
            ['nombre_municipio' => 'La Libertad Norte', 'departamento_id' => 5],
            ['nombre_municipio' => 'La Libertad Centro', 'departamento_id' => 5],
            ['nombre_municipio' => 'La Libertad Este', 'departamento_id' => 5],
            ['nombre_municipio' => 'La Libertad Oeste', 'departamento_id' => 5],
            ['nombre_municipio' => 'La Libertad Sur', 'departamento_id' => 5],
            ['nombre_municipio' => 'La Libertad Costa', 'departamento_id' => 5],
            ['nombre_municipio' => 'La Paz Centro', 'departamento_id' => 6],
            ['nombre_municipio' => 'La Paz Este', 'departamento_id' => 6],
            ['nombre_municipio' => 'La Paz Oeste', 'departamento_id' => 6],
            ['nombre_municipio' => 'La Unión Norte', 'departamento_id' => 7],
            ['nombre_municipio' => 'La Unión Sur', 'departamento_id' => 7],
            ['nombre_municipio' => 'Morazán Norte', 'departamento_id' => 8],
            ['nombre_municipio' => 'Morazán Sur', 'departamento_id' => 8],
            ['nombre_municipio' => 'San Miguel Norte', 'departamento_id' => 9],
            ['nombre_municipio' => 'San Miguel Centro', 'departamento_id' => 9],
            ['nombre_municipio' => 'San Miguel Oeste', 'departamento_id' => 9],
            ['nombre_municipio' => 'San Salvador Norte', 'departamento_id' => 10],
            ['nombre_municipio' => 'San Salvador Centro', 'departamento_id' => 10],
            ['nombre_municipio' => 'San Salvador Este', 'departamento_id' => 10],
            ['nombre_municipio' => 'San Salvador Oeste', 'departamento_id' => 10],
            ['nombre_municipio' => 'San Salvador Sur', 'departamento_id' => 10],
            ['nombre_municipio' => 'San Vicente Norte', 'departamento_id' => 11],
            ['nombre_municipio' => 'San Vicente Sur', 'departamento_id' => 11],
            ['nombre_municipio' => 'Santa Ana Norte', 'departamento_id' => 12],
            ['nombre_municipio' => 'Santa Ana Centro', 'departamento_id' => 12],
            ['nombre_municipio' => 'Santa Ana Este', 'departamento_id' => 12],
            ['nombre_municipio' => 'Santa Ana Oeste', 'departamento_id' => 12],
            ['nombre_municipio' => 'Sonsonate Norte', 'departamento_id' => 13],
            ['nombre_municipio' => 'Sonsonate Centro', 'departamento_id' => 13],
            ['nombre_municipio' => 'Sonsonate Este', 'departamento_id' => 13],
            ['nombre_municipio' => 'Sonsonate Oeste', 'departamento_id' => 13],
            ['nombre_municipio' => 'Usulután Norte', 'departamento_id' => 14],
            ['nombre_municipio' => 'Usulután Oeste', 'departamento_id' => 14],
            ['nombre_municipio' => 'Usulután Este', 'departamento_id' => 14],
            
        ];

          // Insertar los datos en la base de datos
          Municipio::insert($municipios);
    }
}
