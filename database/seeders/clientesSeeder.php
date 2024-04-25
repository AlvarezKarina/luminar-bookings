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

        $cliente1 = new Cliente();
        $cliente1->nombre = "Sebastián Alejandro";
        $cliente1->apellido = "Archila Menendez";
        $cliente1->codigo_area = "1";
        $cliente1->telefono = "1234 5678";
        $cliente1->fecha_nacimiento = "2005-12-26";
        $cliente1->foto = "ci";
        $cliente1->user_id = 1;
        $cliente1->save();
        
        $cliente2 = new Cliente();
        $cliente2->nombre = "Valentina García";
        $cliente2->apellido = "López";
        $cliente2->codigo_area = "2";
        $cliente2->telefono = "2222 2222";
        $cliente2->fecha_nacimiento = "1998-05-15";
        $cliente2->foto = "ci";
        $cliente2->user_id = 2;
        $cliente2->save();
        
        $cliente3 = new Cliente();
        $cliente3->nombre = "Martín López";
        $cliente3->apellido = "Hernández";
        $cliente3->codigo_area = "3";
        $cliente3->telefono = "3333 3333";
        $cliente3->fecha_nacimiento = "1990-09-20";
        $cliente3->foto = "ci";
        $cliente3->user_id = 3;
        $cliente3->save();
        
        $cliente4 = new Cliente();
        $cliente4->nombre = "Ana Rodríguez";
        $cliente4->apellido = "Martínez";
        $cliente4->codigo_area = "4";
        $cliente4->telefono = "4444 4444";
        $cliente4->fecha_nacimiento = "1985-03-12";
        $cliente4->foto = "ci";
        $cliente4->user_id = 4;
        $cliente4->save();
        
        $cliente5 = new Cliente();
        $cliente5->nombre = "Diego Martínez";
        $cliente5->apellido = "Gómez";
        $cliente5->codigo_area = "5";
        $cliente5->telefono = "5555 5555";
        $cliente5->fecha_nacimiento = "1976-11-08";
        $cliente5->foto = "ci";
        $cliente5->user_id = 5;
        $cliente5->save();
        
        $cliente6 = new Cliente();
        $cliente6->nombre = "Laura Pérez";
        $cliente6->apellido = "Sánchez";
        $cliente6->codigo_area = "6";
        $cliente6->telefono = "6666 6666";
        $cliente6->fecha_nacimiento = "2002-07-03";
        $cliente6->foto = "ci";
        $cliente6->user_id = 6;
        $cliente6->save();
        
        $cliente7 = new Cliente();
        $cliente7->nombre = "Andrés Gómez";
        $cliente7->apellido = "Rodríguez";
        $cliente7->codigo_area = "7";
        $cliente7->telefono = "7777 7777";
        $cliente7->fecha_nacimiento = "1996-04-19";
        $cliente7->foto = "ci";
        $cliente7->user_id = 7;
        $cliente7->save();
        
        $cliente8 = new Cliente();
        $cliente8->nombre = "María Torres";
        $cliente8->apellido = "Pérez";
        $cliente8->codigo_area = "8";
        $cliente8->telefono = "8888 8888";
        $cliente8->fecha_nacimiento = "1980-01-25";
        $cliente8->foto = "ci";
        $cliente8->user_id = 8;
        $cliente8->save();
        
        $cliente9 = new Cliente();
        $cliente9->nombre = "Sofía Hernández";
        $cliente9->apellido = "Martínez";
        $cliente9->codigo_area = "9";
        $cliente9->telefono = "9999 9999";
        $cliente9->fecha_nacimiento = "1993-08-14";
        $cliente9->foto = "ci";
        $cliente9->user_id = 9;
        $cliente9->save();
        
        $cliente10 = new Cliente();
        $cliente10->nombre = "Javier Ruiz";
        $cliente10->apellido = "García";
        $cliente10->codigo_area = "10";
        $cliente10->telefono = "1010 1010";
        $cliente10->fecha_nacimiento = "1978-12-30";
        $cliente10->foto = "ci";
        $cliente10->user_id = 10;
        $cliente10->save();
        

    }
}
