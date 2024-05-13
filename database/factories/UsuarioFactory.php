<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use App\Models\Usuario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     public function definition()
    {
        $faker = Faker::create();

        return [
            'id' => $faker->randomNumber(6),
            'primer_nombre' => $faker->firstName,
            'primer_apellido' => $faker->lastName,
            'Direccion' => $faker->address,
            'telefono' => $faker->randomElement(['416', '426', '412', '414', '426']) . $faker->randomNumber(7),
            'email' => $faker->unique()->safeEmail,
            'gerencia_general' => 'GGSTI',
            'Foto' => null,
            'fecha_ingreso' => $faker->dateTimeThisYear($max = 'now', $timezone = null),
        ];
    }
}    
    
