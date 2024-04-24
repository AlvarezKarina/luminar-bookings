<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;


class ComentarioController extends Controller
{
    public function index(){
        $comentario= Comentario::all();//Obtenemos todos los datos (esto se hara con todos lpos controladores)
        


    }
}
