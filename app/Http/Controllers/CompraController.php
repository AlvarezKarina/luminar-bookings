<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index(){
        $compra= Compra::all();//Obtenemos todos los datos (esto se hara con todos lpos controladores)
        


    }
}
