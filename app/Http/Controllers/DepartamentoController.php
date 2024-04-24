<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index(){
        $departamento= Departamento::all();//Obtenemos todos los datos (esto se hara con todos lpos controladores)
        


    }
}
