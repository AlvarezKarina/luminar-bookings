<?php

use App\Http\Controllers\CategoriaEventoController;
use App\Http\Controllers\ClasificacionEventoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\DistritoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EstadoEmpresaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\UserController;
use App\Models\CategoriaEvento;
use App\Http\Controllers\EstadoEventoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/eventos/search', [EventoController::class, 'search']);

Route::post('/eventos', [EventoController::class, 'store']);

Route::post("/cliente-usuario", array(
    AuthController::class,
    'registerCliente'
)

)->name('registrar-cliente');

 // POST -> /api/auth/login. 
 Route::post('login', array(
    AuthController::class,
    'login'
))->name('auth.login');

// GET ->  /api/auth/logout
Route::get('logout', array(
    AuthController::class,
    'logout'
))
->middleware(['auth:api'])
->name('auth.logout');

Route::get('/profile' , array(
    AuthController::class,
    'profile'
))
->middleware(['auth:api'])
    ->name('auth.profile');





Route::get('/categoriaEvento/index',[CategoriaEventoController::class, 'index']);

Route::get('/clasificacionEvento/index',[ClasificacionEventoController::class, 'index']);

Route::get('/cliente/index',[ClienteController::class, 'index']);

Route::get('/comentario/index',[ComentarioController::class, 'index']);

Route::get('/compra/index',[CompraController::class, 'index']);

Route::get('/departamento/index',[DepartamentoController::class, 'index']);

Route::get('/distrito/index',[DistritoController::class, 'index']);

Route::get('/empresa/index',[EmpresaController::class, 'index']);

Route::get('/estadoEmpresa/index',[EstadoEmpresaController::class, 'index']);

Route::get('/estadoEvento/index',[EstadoEventoController::class, 'index']);

Route::get('/municipio/index',[MunicipioController::class, 'index']);

Route::get('/user/index',[UserController::class, 'index']);