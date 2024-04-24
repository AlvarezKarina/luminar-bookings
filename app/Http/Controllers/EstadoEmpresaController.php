<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EstadoEmpresa;

class EstadoEmpresaController extends Controller
{
    public function index(){
        $estadoempresa= EstadoEmpresa::all();//Obtenemos todos los datos (esto se hara con todos lpos controladores)
        


    }
}
