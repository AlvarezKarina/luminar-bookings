<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use Illuminate\Support\Facades\Storage;


class eventoController extends Controller
{
   //http://localhost:8000/api/eventos/search?categoria=10
    public function search(Request $request)
    {
        $eventos = Evento::query();

        if ($request->has('categoria') && $request->categoria != NULL) {
            $eventos = $eventos->where('categoria_id', $request->categoria);
        }

        
        $eventos = $eventos->get();

        return response()->json($eventos);
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'categoria_id' => 'required|integer',
            'clasificacion_id' => 'required|integer',
            'precio' => 'required|numeric',
            'asistentes' => 'required|integer',
            'direccion' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'distrito_id' => 'required|integer',
            'estado_id' => 'required|integer',
            'fecha' => 'required|date',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin' => 'required|date_format:H:i|after:hora_inicio',
        ]);

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('public/fotos');
            $fotoUrl = Storage::url($fotoPath);
        } else {
            $fotoUrl = null;
        }

        $evento = Evento::create(array_merge($request->all(), ['foto' => $fotoUrl]));

        return response()->json(($evento), 201);
    }


    

    //http://localhost:8000/api/customer/put/1
  // Método para actualizar un evento
  public function put(Request $request, string $eventoId)
  {
      // 1. Validar los datos
      $request->validate([
          // Define las reglas de validación aquí
          // Por ejemplo: 'nombre' => 'required|string|max:255',
          // Asegúrate de incluir las reglas necesarias para cada campo que deseas validar
      ]);

      // 2. Verificar la existencia del registro a actualizar
      $evento = Evento::where('id', $eventoId)->first(); // Cambia 'evento' por el nombre del campo de identificación en tu tabla de eventos
      if (!$evento) {
          return response()->json([
              'message' => "Evento no encontrado.",
              'code' => 404,
          ], 404);
      }

      // 3. Sobrescribir la información existente
      $evento->nombre = $request->nombre;
      $evento->descripcion = $request->descripcion;
      $evento->categoria_id = $request->categoria_id;
      $evento->clasificacion_id = $request->clasificacion_id;
      $evento->precio = $request->precio;
      $evento->asistentes = $request->asistentes;
      $evento->direccion = $request->direccion;
      $evento->foto = $request->foto;
      $evento->distrito_id = $request->distrito_id;
      $evento->estado_id = $request->estado_id;
      $evento->fecha = $request->fecha;
      $evento->hora_inicio = $request->hora_inicio;
      $evento->hora_fin = $request->hora_fin;

      if (!$evento->save()) {
          return response()->json([
              'message' => "Información no actualizada.",
              'code' => 422,
          ], 422);
      }

      return response()->json([
          'message' => "Evento actualizado con éxito.",
          'data' => $evento,
          'code' => 200, // Cambiado de 201 a 200 porque es una actualización exitosa, no una creación
      ], 200);
  }
 //http://localhost:8000/api/customer/delete/1
  // Método para eliminar un evento
  public function delete(string $eventoId)
  {
      $evento = Evento::find($eventoId);
      if (!$evento) {
          return response()->json([
              'message' => "Evento no encontrado.",
              'code' => 404,
          ], 404);
      }

      if (!$evento->delete()) {
          return response()->json([
              'message' => "Error al borrar el evento.",
              'code' => 500,
          ], 500);
      }

      return response()->json([
          'message' => "Evento eliminado con éxito.",
          'code' => 200,
      ], 200);
  }

}


