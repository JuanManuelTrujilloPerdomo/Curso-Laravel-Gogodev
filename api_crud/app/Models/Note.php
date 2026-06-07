<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Controlamos que datos se muestran al hacer una consulta a la base de datos, en este caso no se mostrarán las fechas de creación y actualización
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
