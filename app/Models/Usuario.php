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
        'p00',
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'direccion',
        'telefono',
        'email',
        'gerencia_general',
        'foto',
        'fecha_ingreso',
        'correo_corporativo',
        'huella_dactilar'
    ];
    

}

