<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    //Campos requeridos 
    public $fillable = [
        'nombre_departamento'
    ];

    //Campos ocultos 
    protected  $hidden = [
        'id'
    ];


}
