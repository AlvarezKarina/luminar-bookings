<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClasificacionEvento extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_clasificacion'];

    protected $hidden = ['created_at', 'updated_at'];
}
