<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use Database\Factories\UsuarioFactory;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        UsuarioFactory::new()->count(80)->create();
    }

    
}
