<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'codigo_area',
        'telefono',
        'fecha_nacimiento',
        'foto',
        'user_id'
    ];

    public function users()
    {
        return $this->belongsTo(Users::class);
    }

    protected $hidden = ['created_at', 'updated_at'];
}
