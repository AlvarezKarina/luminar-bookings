<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use Illuminate\Support\Facades\Storage;

class eventoController extends Controller
{
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

}
