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

        // Evento 2 relacionado con la empresa 2
$evento2 = new Evento();
$evento2->nombre = "Torneo de Fútbol";
$evento2->descripcion = "¡Participa en nuestro torneo de fútbol y demuestra tus habilidades!";
$evento2->precio = "10";
$evento2->asistentes = "150";
$evento2->direccion = "Estadio Cuscatlán, San Salvador";
$evento2->fecha = "2024-06-15";
$evento2->hora_inicio = "14:00";
$evento2->hora_fin = "18:00";
$evento2->distrito_id = 2;
$evento2->categoria_id = 1;
$evento2->clasificacion_id = 1;
$evento2->estado_id = 4;
$evento2->foto = "si";

$evento2->save();

// Evento 3 relacionado con la empresa 3
$evento3 = new Evento();
$evento3->nombre = "Festival Gastronómico";
$evento3->descripcion = "¡Disfruta de la mejor comida gourmet de la ciudad en nuestro festival gastronómico!";
$evento3->precio = "50";
$evento3->asistentes = "200";
$evento3->direccion = "Plaza Futura, San Salvador";
$evento3->fecha = "2024-07-20";
$evento3->hora_inicio = "18:00";
$evento3->hora_fin = "22:00";
$evento3->distrito_id = 3;
$evento3->categoria_id = 6;
$evento3->clasificacion_id = 1;
$evento3->estado_id = 4;
$evento3->foto = "si";

$evento3->save();

// Evento 4 relacionado con la empresa 4
$evento4 = new Evento();
$evento4->nombre = "Exposición de Arte";
$evento4->descripcion = "¡Ven y disfruta de una variedad de obras de arte de talentosos artistas locales!";
$evento4->precio = "15";
$evento4->asistentes = "100";
$evento4->direccion = "Galería de Arte Contemporáneo, San Salvador";
$evento4->fecha = "2024-08-10";
$evento4->hora_inicio = "16:00";
$evento4->hora_fin = "20:00";
$evento4->distrito_id = 4;
$evento4->categoria_id = 3;
$evento4->clasificacion_id = 1;
$evento4->estado_id = 4;
$evento4->foto = "si";

$evento4->save();

// Evento 5 relacionado con la empresa 5
$evento5 = new Evento();
$evento5->nombre = "Concierto en Vivo";
$evento5->descripcion = "¡Disfruta de una noche llena de música en nuestro concierto en vivo!";
$evento5->precio = "20";
$evento5->asistentes = "300";
$evento5->direccion = "Anfiteatro CIFCO, San Salvador";
$evento5->fecha = "2024-09-25";
$evento5->hora_inicio = "20:00";
$evento5->hora_fin = "23:00";
$evento5->distrito_id = 5;
$evento5->categoria_id = 2;
$evento5->clasificacion_id = 1;
$evento5->estado_id = 4;
$evento5->foto = "si";

$evento5->save();

// Evento 6 relacionado con la empresa 6
$evento6 = new Evento();
$evento6->nombre = "Taller de Cocina";
$evento6->descripcion = "¡Aprende nuevas recetas y técnicas culinarias en nuestro taller de cocina!";
$evento6->precio = "25";
$evento6->asistentes = "50";
$evento6->direccion = "Escuela de Gastronomía, San Salvador";
$evento6->fecha = "2024-10-15";
$evento6->hora_inicio = "10:00";
$evento6->hora_fin = "14:00";
$evento6->distrito_id = 6;
$evento6->categoria_id = 6;
$evento6->clasificacion_id = 1;
$evento6->estado_id = 4;
$evento6->foto = "si";

$evento6->save();

// Evento 7 relacionado con la empresa 7
$evento7 = new Evento();
$evento7->nombre = "Noche de Película";
$evento7->descripcion = "¡Disfruta de una noche de cine bajo las estrellas!";
$evento7->precio = "10";
$evento7->asistentes = "200";
$evento7->direccion = "Parque Bicentenario, San Salvador";
$evento7->fecha = "2024-11-05";
$evento7->hora_inicio = "18:30";
$evento7->hora_fin = "22:30";
$evento7->distrito_id = 7;
$evento7->categoria_id = 4;
$evento7->clasificacion_id = 1;
$evento7->estado_id = 4;
$evento7->foto = "si";

$evento7->save();

// Evento 8 relacionado con la empresa 8
$evento8 = new Evento();
$evento8->nombre = "Carrera Benéfica";
$evento8->descripcion = "¡Participa en nuestra carrera benéfica y ayuda a causas importantes!";
$evento8->precio = "5";
$evento8->asistentes = "300";
$evento8->direccion = "Parque Cuscatlán, San Salvador";
$evento8->fecha = "2024-12-10";
$evento8->hora_inicio = "07:00";
$evento8->hora_fin = "10:00";
$evento8->distrito_id = 8;
$evento8->categoria_id = 1;
$evento8->clasificacion_id = 1;
$evento8->estado_id = 4;
$evento8->foto = "si";

$evento8->save();

// Evento 9 relacionado con la empresa 9
$evento9 = new Evento();
$evento9->nombre = "Conferencia Cultural";
$evento9->descripcion = "¡Participa en nuestra conferencia cultural y descubre nuevos horizontes!";
$evento9->precio = "5";
$evento9->asistentes = "100";
$evento9->direccion = "Teatro Nacional, San Salvador";
$evento9->fecha = "2025-01-20";
$evento9->hora_inicio = "16:00";
$evento9->hora_fin = "18:00";
$evento9->distrito_id = 9;
$evento9->categoria_id = 4;
$evento9->clasificacion_id = 1;
$evento9->estado_id = 4;
$evento9->foto = "si";

$evento9->save();
}
}

