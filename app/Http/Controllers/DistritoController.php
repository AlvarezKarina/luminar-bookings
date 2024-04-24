<?php

namespace App\Http\Controllers;

use App\Models\Distrito;
use Illuminate\Http\Request;

class DistritoController extends Controller
{
    public function index(){
        $distrito= Distrito::all();//Obtenemos todos los datos (esto se hara con todos lpos controladores)
        


    }
}
