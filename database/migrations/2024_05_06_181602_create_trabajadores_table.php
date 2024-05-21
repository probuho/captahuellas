<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->id();
            $table->string('primer_nombre',length:200);
            $table->string('primer_apellido',length:200);
            $table->string('Direccion',length:255);
            $table->string('telefono',length:8);
            $table->string('email',length:255)->unique();
            $table->string('Gerencia General',length:255);
            $table->binary('Foto')->nullable();
            $table->timestamp('fecha_ingreso')->nullable();
            $table->string('p00',length:6);
            $table->string('segundo_nombre',length:200);
            $table->string('segundo_apellido',length:200);
            $table->string('correo_corporativo',length:50);
            $table->binary('huella_dactilar')->nullable();
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
