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
            'p00' => $faker->randomNumber(6, true),
            'primer_nombre' => $faker->firstName,
            'segundo_nombre' => $faker->firstName,
            'primer_apellido' => $faker->lastName,
            'segundo_apellido' => $faker->lastName,
            'Direccion' => $faker->address,
            'telefono' => $faker->randomElement(['416', '426', '412', '414', '426']) . $faker->randomNumber(7),
            'email' => $faker->unique()->safeEmail,
            'correo_corporativo' => $faker->firstName . '.' . $faker->lastName . '@movilnet.com.ve',
            'gerencia_general' => 'GGSTI',
            'Foto' => null,
            'huella_dactilar' => null,
            'fecha_ingreso' => $faker->dateTimeThisYear($max = 'now', $timezone = null),
        ];
    }
}    
    
