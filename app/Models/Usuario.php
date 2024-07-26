<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'trabajadores';
    use HasFactory;
    protected $fillable = [
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'direccion',
        'telefono',
        'email',
        'gerencia_general',
        'foto',
        'fecha_nac',
        'p00',
        'correo_corporativo',
        'huella_dactilar'
    ];
}
