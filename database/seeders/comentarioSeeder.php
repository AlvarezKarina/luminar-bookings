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
        // Comentario 1 relacionado con el cliente 1 y el evento 1
$comentario1 = new Comentario();
$comentario1->comentario = "Buen evento, Saludos";
$comentario1->cliente_id = 1; // Relacionado con el cliente 1
$comentario1->evento_id = 1; // Relacionado con el evento 1
$comentario1->save();

// Comentario 2 relacionado con el cliente 2 y el evento 2
$comentario2 = new Comentario();
$comentario2->comentario = "Gran experiencia, ¡gracias!";
$comentario2->cliente_id = 2; // Relacionado con el cliente 2
$comentario2->evento_id = 2; // Relacionado con el evento 2
$comentario2->save();

// Comentario 3 relacionado con el cliente 3 y el evento 3
$comentario3 = new Comentario();
$comentario3->comentario = "Me encantó, definitivamente volvería";
$comentario3->cliente_id = 3; // Relacionado con el cliente 3
$comentario3->evento_id = 3; // Relacionado con el evento 3
$comentario3->save();

// Comentario 4 relacionado con el cliente 4 y el evento 4
$comentario4 = new Comentario();
$comentario4->comentario = "Increíble evento, me encantó la experiencia";
$comentario4->cliente_id = 4; // Relacionado con el cliente 4
$comentario4->evento_id = 4; // Relacionado con el evento 4
$comentario4->save();

// Comentario 5 relacionado con el cliente 5 y el evento 5
$comentario5 = new Comentario();
$comentario5->comentario = "Excelente organización, lo pasé genial";
$comentario5->cliente_id = 5; // Relacionado con el cliente 5
$comentario5->evento_id = 5; // Relacionado con el evento 5
$comentario5->save();

// Comentario 6 relacionado con el cliente 6 y el evento 6
$comentario6 = new Comentario();
$comentario6->comentario = "Fue una experiencia única, gracias por organizarlo";
$comentario6->cliente_id = 6; // Relacionado con el cliente 6
$comentario6->evento_id = 6; // Relacionado con el evento 6
$comentario6->save();

// Comentario 7 relacionado con el cliente 7 y el evento 7
$comentario7 = new Comentario();
$comentario7->comentario = "Me encantó el ambiente, definitivamente volveré";
$comentario7->cliente_id = 7; // Relacionado con el cliente 7
$comentario7->evento_id = 7; // Relacionado con el evento 7
$comentario7->save();

// Comentario 8 relacionado con el cliente 8 y el evento 8
$comentario8 = new Comentario();
$comentario8->comentario = "Gran evento, me divertí mucho";
$comentario8->cliente_id = 8; // Relacionado con el cliente 8
$comentario8->evento_id = 8; // Relacionado con el evento 8
$comentario8->save();

// Comentario 9 relacionado con el cliente 9 y el evento 9
$comentario9 = new Comentario();
$comentario9->comentario = "Interesante conferencia, aprendí mucho";
$comentario9->cliente_id = 9; // Relacionado con el cliente 9
$comentario9->evento_id = 9; // Relacionado con el evento 9
$comentario9->save();
    }
}
