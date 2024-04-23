<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'categoria_id',
        'clasificacion_id',
        'precio',
        'asistentes',
        'direccion',
        'foto',
        'distrito_id',
        'estado_id',
        'fecha',
        'hora_inicio',
        'hora_fin',
        'delete_at'
    ];

    public function categoria()
    {
        return $this->belongsTo(CategoriaEvento::class);
    }

    public function clasificacion()
    {
        return $this->belongsTo(ClasificacionEvento::class);
    }

    public function distrito()
    {
        return $this->belongsTo(Distrito::class);
    }

    public function estado()
    {
        return $this->belongsTo(EstadoEvento::class);
    }
}
