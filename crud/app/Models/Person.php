<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'username',
        'email',
        'direccion',
        'direccion2',
        'pais',
        'ciudad',
        'codigopostal',
    ];
}
