<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_distrito', 'municipio_id'
    ];

    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }

    public function Empresas()
    {
        return $this->hasMany(Empresa::class);
    }
}
