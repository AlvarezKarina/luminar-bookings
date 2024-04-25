<?php

namespace Database\Seeders;

use App\Models\Comentario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class comentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comentario=new Comentario();

        $comentario->comentario="Buen evento Saludos";
        $comentario->cliente_id="1";
        $comentario->evento_id="1";

        $comentario->save();
    }
}
