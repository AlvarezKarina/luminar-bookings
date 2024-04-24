<?php

namespace App\Http\Controllers;

use App\Models\Empresa as ModelsEmpresa;
use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresaController extends Controller
{
    public function index(){
        $empresa= Empresa::all();//Obtenemos todos los datos (esto se hara con todos lpos controladores)
        


    }
}
