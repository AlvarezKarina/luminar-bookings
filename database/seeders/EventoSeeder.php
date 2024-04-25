<?php

namespace Database\Seeders;

use App\Models\Evento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $evento=new Evento();

        $evento->nombre="Desfile de Moda";
        $evento->descripcion="Descubre las últimas tendencias en moda local e internacional.";
        $evento->precio="30";
        $evento->asistentes="250";
        $evento->direccion="Hotel Sheraton Presidente, San Salvador";
        $evento->fecha="2005-12-26";
        $evento->hora_inicio="19:00";
        $evento->hora_fin="22:00";
        $evento->distrito_id="1";
        $evento->categoria_id="4";
        $evento->clasificacion_id="2";
        $evento->distrito_id="1";
        $evento->estado_id="4";
        $evento->foto="si";
        $evento->save();

    }
    }

