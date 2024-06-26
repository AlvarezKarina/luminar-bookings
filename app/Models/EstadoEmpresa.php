<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoEmpresa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_estado'
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
