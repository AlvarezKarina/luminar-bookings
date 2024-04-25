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
        $compra=new Compra();

        $compra->num_compra="1";
        $compra->fecha_compra="2005-12-26";
        $compra->cantidad_boletos="1";
        $compra->num_tarjeta="9012";
        $compra->evento_id="1";
        $compra->cliente_id="1";

        $compra->save();
    }
}
