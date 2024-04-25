<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

//Importando los modelos a utilizar
use App\Models\User;
use App\Models\Cliente;
use Carbon\Carbon; //Sirve para crear fechas.

class AuthController extends Controller
{


    //METODO DEL MODELO USER Y CLIENTE. 


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
        $clienteData['user_id'] = $newUser->id;

        // Asociar el cliente con el usuario
        $newUser->cliente()->create($clienteData);

        return response()->json([
            'message' => 'Usuario registrado con éxito',
            'data' => ['user' => $newUser],
            'code' => 201,
        ], 201);
    }

    // Manejar el caso en que no se pueda crear el usuario
    return response()->json([
        'message' => 'Error al registrar el usuario',
        'code' => 422,
    ], 422);
}

 //Iniciar sesion POST
 public function login(Request $request){
    //$request->validated();

    //Se verifica si el usuario existe. 
    $user = User::where('email', '=', $request->email)->first();
    
    //Obtenemos las credenciales de acceso.
    $credentials = request(array(
        'email',
        'password'
    )); 

    //Limpiamos los espacios al inicio y final de la contraseña. 
    $credentials['password'] =trim($credentials['password']);
    
    //Verificamos que el usuario exista mientas intentamos iniciar sesion.

    if(
        Auth::attempt($credentials) == false || /*Or (o)*/ $user == NULL ){  //Es una doble validacion, va a determinar si va vacio o si tiene algun registro. 
         return response()->json(array(
            'message' => "Usuario no encontrada. Verifique sus credenciales.",
            'data',
            'code' => 401 //401 significa que no podra iniciar sesion. 
         ),401);   
    }

    //Se obtiene el usuario de ina sesion inicial. 
    $user = $request->user();

    //Definimos el nombre para el token
    $tokenResult = $user->createToken('User Acces Token');

    //Generamos el token 
    $token = $tokenResult->token;

    //Generamos una fecha de vencimiento
    $token->expires_at = Carbon::now()->addHours(2);

    //Guardar el token 
    $token->save(); 

    $result =array(
        'access_token' =>$tokenResult->accessToken,
        'token_type' => 'Bearer', //Eso no va a variar 
        'expires_at' => Carbon::parse(
            $tokenResult->token->expires_at
        )->toDateTimeString()
    );

    return response()->json(array(
        'message' => 'Bienvenido',
        'data' => $result,
        'code' =>200
    ),200);


}

     //Cerrar sesion GET
     public function logout(Request $request){
        //Obtener el usuario de la peticion.
        $user = $request->user();

        //Obtenemos el toquen del usuario. 
        $token= $user->token();
        
        //Revocamos (Desahabilitar) el token

        $token->revoke();

        return response()->json(array(
            'message' => 'Cierre de sesion exitoso',
            'data' => true,
            'code' =>200
        ),200);



    }


    //Perfil GET
    public function profile(Request $request){

        //Obtenemos la info del usuario segun token 
        $user = $request->user();

        return response()->json(array(
            'message' => 'Perfil del usuario',
            'data' => $user,
            'code' =>200
        ),200);

    }

    //Actualizar datos de un cliente en especifico. 

   /* public function update(UpdateCustomerRequest $request, string $email){
        //Validamos los datos
        //$request->validated();

        //2. Verificar la existencia del registro a actualizar. 
        $usuario = Cliente::where('email', '=', $email)->first();
        if ($usuario==NULL) {
            return response()->json(array(
                'message' => "Cliente no encontrado.",
                'code' => 404,
            ), 404);
        }

    }*/

    
   
    


}
