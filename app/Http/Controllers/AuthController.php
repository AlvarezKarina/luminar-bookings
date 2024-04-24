<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Importando los modelos a utilizar
use App\Models\User;
use App\Models\Cliente;

class AuthController extends Controller
{
     // Registro de Usuario 
     public function registerCliente(Request $request)
{
    // Datos del usuario
    $userData = [
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ];

    // Datos del cliente
    $clienteData = [
        'nombre' => $request->nombre,
        'apellido' => $request->apellido,
        'codigo_area' => $request->codigo_area,
        'telefono' => $request->telefono,
        'fecha_nacimiento' => $request->fecha_nacimiento,
        'foto' => $request->foto,
    ];

    // Crear el usuario
    $newUser = User::create($userData);

    // Verificar si el usuario se creó correctamente
    if ($newUser) {
        // Asociar el cliente con el usuario
        $newUser->cliente()->create($clienteData);

        return response()->json([
            'message' => 'Usuario registrado con éxito',
            'data' => ['user' => $newUser],
            'code' => 201,
        ], 201);
    } else {
        // Manejar el caso en que no se pueda crear el usuario
        return response()->json([
            'message' => 'Error al registrar el usuario',
            'code' => 422,
        ], 422);
    }
}

}
