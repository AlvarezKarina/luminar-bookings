<?php

namespace Database\Seeders;

use App\Models\Compra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class compraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $compra1 = new Compra();
        $compra1->num_compra = "1";
        $compra1->fecha_compra = "2005-12-26";
        $compra1->cantidad_boletos = "1";
        $compra1->num_tarjeta = "9012"; // Últimos cuatro dígitos de la tarjeta
        $compra1->evento_id = 1; // Relacionado con el evento 1
        $compra1->cliente_id = 1; // Relacionado con el cliente 1
        $compra1->save();

        // Compra 2 relacionada con el cliente 2 y el evento 2
$compra2 = new Compra();
$compra2->num_compra = "2";
$compra2->fecha_compra = "2024-06-15";
$compra2->cantidad_boletos = "2";
$compra2->num_tarjeta = "3456"; // Últimos cuatro dígitos de la tarjeta
$compra2->evento_id = 2; // Relacionado con el evento 2
$compra2->cliente_id = 2; // Relacionado con el cliente 2
$compra2->save();

// Compra 3 relacionada con el cliente 3 y el evento 3
$compra3 = new Compra();
$compra3->num_compra = "3";
$compra3->fecha_compra = "2024-07-20";
$compra3->cantidad_boletos = "3";
$compra3->num_tarjeta = "6789"; // Últimos cuatro dígitos de la tarjeta
$compra3->evento_id = 3; // Relacionado con el evento 3
$compra3->cliente_id = 3; // Relacionado con el cliente 3
$compra3->save();

// Compra 4 relacionada con el cliente 4 y el evento 4
$compra4 = new Compra();
$compra4->num_compra = "4";
$compra4->fecha_compra = "2024-08-10";
$compra4->cantidad_boletos = "1";
$compra4->num_tarjeta = "9876"; // Últimos cuatro dígitos de la tarjeta
$compra4->evento_id = 4; // Relacionado con el evento 4
$compra4->cliente_id = 4; // Relacionado con el cliente 4
$compra4->save();

// Compra 5 relacionada con el cliente 5 y el evento 5
$compra5 = new Compra();
$compra5->num_compra = "5";
$compra5->fecha_compra = "2024-09-25";
$compra5->cantidad_boletos = "2";
$compra5->num_tarjeta = "2345"; // Últimos cuatro dígitos de la tarjeta
$compra5->evento_id = 5; // Relacionado con el evento 5
$compra5->cliente_id = 5; // Relacionado con el cliente 5
$compra5->save();

// Compra 6 relacionada con el cliente 6 y el evento 6
$compra6 = new Compra();
$compra6->num_compra = "6";
$compra6->fecha_compra = "2024-10-15";
$compra6->cantidad_boletos = "3";
$compra6->num_tarjeta = "5432"; // Últimos cuatro dígitos de la tarjeta
$compra6->evento_id = 6; // Relacionado con el evento 6
$compra6->cliente_id = 6; // Relacionado con el cliente 6
$compra6->save();

// Compra 7 relacionada con el cliente 7 y el evento 7
$compra7 = new Compra();
$compra7->num_compra = "7";
$compra7->fecha_compra = "2024-11-05";
$compra7->cantidad_boletos = "1";
$compra7->num_tarjeta = "8765"; // Últimos cuatro dígitos de la tarjeta
$compra7->evento_id = 7; // Relacionado con el evento 7
$compra7->cliente_id = 7; // Relacionado con el cliente 7
$compra7->save();

// Compra 8 relacionada con el cliente 8 y el evento 8
$compra8 = new Compra();
$compra8->num_compra = "8";
$compra8->fecha_compra = "2024-12-10";
$compra8->cantidad_boletos = "2";
$compra8->num_tarjeta = "9876"; // Últimos cuatro dígitos de la tarjeta
$compra8->evento_id = 8; // Relacionado con el evento 8
$compra8->cliente_id = 8; // Relacionado con el cliente 8
$compra8->save();

// Compra 9 relacionada con el cliente 9 y el evento 9
$compra9 = new Compra();
$compra9->num_compra = "9";
$compra9->fecha_compra = "2025-01-20";
$compra9->cantidad_boletos = "1";
$compra9->num_tarjeta = "7654"; // Últimos cuatro dígitos de la tarjeta
$compra9->evento_id = 9; // Relacionado con el evento 9
$compra9->cliente_id = 9; // Relacionado con el cliente 9
$compra9->save();

    }
}
