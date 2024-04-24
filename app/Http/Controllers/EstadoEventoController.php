<?php

namespace App\Http\Controllers;

use App\Models\EstadoEvento;
use Illuminate\Http\Request;

class EstadoEventoController extends Controller
{
    public function index(){
        $estadoevento= EstadoEvento::all();//Obtenemos todos los datos (esto se hara con todos lpos controladores)
        
    }
}
