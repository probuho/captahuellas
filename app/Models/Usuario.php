<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //Utiliza la tabla trabajadores, donde se almacena la informacion total
    protected $table = 'trabajadores';
    use HasFactory;
    protected $fillable = [
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'Direccion',
        'telefono',
        'email',
        'Gerencia_General',
        'Foto',
        'fecha_ingreso',
        'p00',
        'correo_corporativo',
        'huella_dactilar'
    ];

}

