<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    //protected $table
    
    //esto nos permite modificar los datos en la base de datos
    protected $fillable=[
        'nombre',
        'numero_control',
        'fecha_nacimiento',
        'sexo',
        'especialidad'
    ];
}
