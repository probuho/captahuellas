<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    // database/migrations/2024_05_06_181602_create_trabajadores_table.php
    public function up()
    {
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->id();
            $table->integer('p00');
            $table->string('primer_nombre');
            $table->string('segundo_nombre')->nullable();
            $table->string('primer_apellido');
            $table->string('segundo_apellido')->nullable();
            $table->string('Direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('email')->unique();
            $table->string('correo_corporativo')->nullable();
            $table->string('gerencia_general')->nullable();
            $table->binary('Foto')->nullable(); // Asegúrate de que esta línea exista
            $table->binary('huella_dactilar')->nullable();
            $table->timestamp('fecha_ingreso')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trabajadores');
    }
};
