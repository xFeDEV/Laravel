<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profesor extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function alumnos(): HasMany
{
    return $this->hasMany(Alumno::class, 'profe_id');
}
}
