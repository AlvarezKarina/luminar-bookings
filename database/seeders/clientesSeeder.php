<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class clientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cliente=new Cliente();

        $cliente->nombre="Sebastián Alejandro";
        $cliente->apellido="Archila Menendez";
        $cliente->codigo_area="1";
        $cliente->telefono="1111 1111";
        $cliente->fecha_nacimiento="2005-12-26";
        $cliente->foto="ci";
        $cliente->user_id="1";



        $cliente->save();
    }
}
