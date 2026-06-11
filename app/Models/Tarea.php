<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $table = 'tareas';

    protected $fillable = [
        'titulo',
        'descripcion',
        'prioridad',
        'completada',
        'fecha_limite',
    ];

    protected function casts(): array
    {
        return [
            'completada' => 'boolean',
            'fecha_limite' => 'date',
        ];
    }
}