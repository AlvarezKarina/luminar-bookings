<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empresa=new Empresa();

        $empresa->nombre="Artsy Studio";
        $empresa->nombre_encargado="Paula Gutiérrez";
        $empresa->telefono="5555-5555";
        $empresa->foto="zi";
        $empresa->actividad_comercial="Estudio de arte y galería de exposiciones";
        $empresa->direccion="Colonia Escalón, San Salvador";
        $empresa->distrito_id="1";
        $empresa->estado_id="1";
        $empresa->user_id="1";

        $empresa->save();


        $empresa1=new Empresa();
        $empresa1->nombre = "Artistic Express";
        $empresa1->nombre_encargado = "José Martínez";
        $empresa1->telefono = "2222-3333";
        $empresa1->foto = "zi";
        $empresa1->actividad_comercial = "Estudio de arte y galería de exposiciones";
        $empresa1->direccion = "Colonia San Benito, San Salvador";
        $empresa1->distrito_id = 15;
        $empresa1->estado_id = 1;
        $empresa1->user_id = 1;
        
        $empresa1->save();




    }
}
