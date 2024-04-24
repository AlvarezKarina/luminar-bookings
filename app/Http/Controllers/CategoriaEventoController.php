<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriaEvento;

class CategoriaEventoController extends Controller
{
    //Listamos los elementos de la tabla
    public function index(){
        $categorias= CategoriaEvento::all();//Obtenemos todos los datos (esto se hara con todos lpos controladores)
        


    }
}
