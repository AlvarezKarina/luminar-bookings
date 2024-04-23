<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable = ['cliente_id', 'evento_id', 'comentario'];

    protected $hidden = ['cliente_id', 'evento_id', 'created_at', 'updated_at'];

    public function evento()
    {
        return $this->belongsTo(Evento::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
