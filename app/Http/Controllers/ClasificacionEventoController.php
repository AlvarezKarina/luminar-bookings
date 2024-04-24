<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClasificacionEvento;

class ClasificacionEventoController extends Controller
{
    public function index(){
        $categorias= ClasificacionEvento::all();//Obtenemos todos los datos (esto se hara con todos lpos controladores)
        


    }
}

