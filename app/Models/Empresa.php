<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{

    protected $fillable = [
        'nombre',
        'nombre_encargado',
        'telefono',
        'foto',
        'actividad_comercial',
        'direccion',
        'distrito_id',
        'estado_id',
        'user_id'
    ];

    public function distrito()
    {
        return $this->belongsTo(Distrito::class);
    }

    public function estado()
    {
        return $this->belongsTo(EstadoEmpresa::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
