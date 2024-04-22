<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $fillable = [
        'num_compra',
        'fecha_compra',
        'cantidad_boletos',
        'num_tarjeta',
        'evento_id',
        'cliente_id'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function evento()
    {
        return $this->belongsTo(Evento::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
