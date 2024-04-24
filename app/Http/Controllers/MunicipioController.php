<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    public function index(){
        $municipio= Municipio::all();//Obtenemos todos los datos (esto se hara con todos lpos controladores)
        
    }
}
