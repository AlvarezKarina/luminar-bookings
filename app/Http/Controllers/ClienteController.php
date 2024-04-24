<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index(){
        $customers= Cliente::all();//Obtenemos todos los datos (esto se hara con todos los controladores)
        if(count($customers)<1){
            return response()->json(
                array(
                    'message'=>"No hay clientes",
                    'data'=>$customers,
                    'code'=>404,
                ),404
            );
        }


    }
}

