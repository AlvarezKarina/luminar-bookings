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

        $empresa2=new Empresa();
        $empresa2->nombre = "Sports Elite";
        $empresa2->nombre_encargado = "Ana Herrera";
        $empresa2->telefono = "7777-8888";
        $empresa2->foto = "zi";
        $empresa2->actividad_comercial = "Tienda deportiva y entrenamiento físico";
        $empresa2->direccion = "Colonia Escalón, San Salvador";
        $empresa2->distrito_id = 8;
        $empresa2->estado_id = 1;
        $empresa2->user_id = 1;
        $empresa2->save();

        $empresa3=new Empresa();
        $empresa3->nombre = "Gastronomy Haven";
        $empresa3->nombre_encargado = "Carlos López";
        $empresa3->telefono = "5555-6666";
        $empresa3->foto = "zi";
        $empresa3->actividad_comercial = "Restaurante gourmet y eventos gastronómicos";
        $empresa3->direccion = "Boulevard del Hipódromo, San Salvador";
        $empresa3->distrito_id = 3;
        $empresa3->estado_id = 1;
        $empresa3->user_id = 1;
        $empresa3->save();

        $empresa4=new Empresa();
        $empresa4->nombre = "Culture Nexus";
        $empresa4->nombre_encargado = "Sofía Rodríguez";
        $empresa4->telefono = "4444-5555";
        $empresa4->foto = "zi";
        $empresa4->actividad_comercial = "Promoción de eventos culturales y artísticos";
        $empresa4->direccion = "Calle La Mascota, San Salvador";
        $empresa4->distrito_id = 10;
        $empresa4->estado_id = 1;
        $empresa4->user_id = 1;
        $empresa4->save();

        
        $empresa5=new Empresa();
        $empresa5->nombre = "Soccer Fever";
        $empresa5->nombre_encargado = "David Sánchez";
        $empresa5->telefono = "6666-7777";
        $empresa5->foto = "zi";
        $empresa5->actividad_comercial = "Tienda de artículos deportivos y eventos futbolísticos";
        $empresa5->direccion = "Colonia Flor Blanca, San Salvador";
        $empresa5->distrito_id = 5;
        $empresa5->estado_id = 1;
        $empresa5->user_id = 1;
        $empresa5->save();


        $empresa6=new Empresa();
        $empresa6->nombre = "Foodie Paradise";
        $empresa6->nombre_encargado = "Laura Ramírez";
        $empresa6->telefono = "3333-4444";
        $empresa6->foto = "zi";
        $empresa6->actividad_comercial = "Restaurante temático y experiencias culinarias";
        $empresa6->direccion = "Boulevard de Los Héroes, San Salvador";
        $empresa6->distrito_id = 17;
        $empresa6->estado_id = 1;
        $empresa6->user_id = 1;
        $empresa6->save();


        $empresa7=new Empresa();
        $empresa7->nombre = "Artistic Journey";
        $empresa7->nombre_encargado = "Andrés Castro";
        $empresa7->telefono = "7777-9999";
        $empresa7->foto = "zi";
        $empresa7->actividad_comercial = "Galería de arte contemporáneo y eventos culturales";
        $empresa7->direccion = "Paseo General Escalón, San Salvador";
        $empresa7->distrito_id = 9;
        $empresa7->estado_id = 1;
        $empresa7->user_id = 1;
        $empresa7->save();

        $empresa8=new Empresa();
        $empresa8->nombre = "Fitness Fusion";
        $empresa8->nombre_encargado = "María González";
        $empresa8->telefono = "8888-1111";
        $empresa8->foto = "zi";
        $empresa8->actividad_comercial = "Gimnasio y entrenamiento funcional";
        $empresa8->direccion = "Colonia San Benito, San Salvador";
        $empresa8->distrito_id = 13;
        $empresa8->estado_id = 1;
        $empresa8->user_id = 1;
        $empresa8->save();

        $empresa9=new Empresa();
        $empresa9->nombre = "Music Harmony";
        $empresa9->nombre_encargado = "Juan Flores";
        $empresa9->telefono = "5555-2222";
        $empresa9->foto = "zi";
        $empresa9->actividad_comercial = "Escuela de música y conciertos en vivo";
        $empresa9->direccion = "Boulevard Los Próceres, San Salvador";
        $empresa9->distrito_id = 22;
        $empresa9->estado_id = 1;
        $empresa9->user_id = 1;
        $empresa9->save();



    }
}
