<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Importando el modelo de Estado Empresa
use App\Models\EstadoEmpresa;

class EstadoEmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estado_empresa = [
             'nombre_estado' => 'En validación',
             'nombre_estado' => 'Validado',
             'nombre_estado' => 'Incompleto'

        ];

        EstadoEmpresa::insert($estado_empresa);
    }
}
