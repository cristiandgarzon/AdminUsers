<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios'; // Nombre de la tabla en la base de datos si no sigue la convención de Laravel

    protected $fillable = [
        'nombre',
        'apellido',
        'correo_electronico',
        'fecha_de_registro',
    ];

    // Si no estás usando timestamps, puedes configurar lo siguiente:
    public $timestamps = true;
}