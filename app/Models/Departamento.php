<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    private $table = "departamentos";

    //Campos requeridos 
    public $fillable = [
        'nombre_departamento'
    ];

    //Campos ocultos 
    private $hidden = [
        'id'
    ];


}
