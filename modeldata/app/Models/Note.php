<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $table = "notes";

    protected $fillable = [ // Especifico que campos van a ser manipulados
        "title",
        "description",
        "deadline",
        "done",
    ];

    protected $guarded = []; // Especificamos los campos que vamos a proteger de no sean manipulados
    protected $casts = []; // Casteamos datos
    protected $hidden = []; // Evita que entreguemos datos que no deben ser y serializamos los datos dentro de un array []

}
