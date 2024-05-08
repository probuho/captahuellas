<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //Utiliza la tabla trabajadores, donde se almacena la informacion total
    protected $table = 'trabajadores';
    // use HasFactory;
}
