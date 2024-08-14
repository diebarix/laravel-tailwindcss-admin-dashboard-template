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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apell_paterno');
            $table->string('apell_materno');
            $table->date('fecha_nac')->nullable();
            $table->string('lugar_nac')->nullable();
            $table->string('curp')->nullable();
            $table->string('tipo_sangre')->nullable();
            $table->boolean('tiene_necesidad_eductiva')->nullable();
            $table->string('cual')->nullable();

            $table->string('nombre_padre_tutor')->nullable();
            $table->boolean('tiene_tutor')->nullable();
            $table->string('profesion_ocupacion_padre')->nullable();
            $table->string('tel_trabajo_padre')->nullable();
            $table->string('celular_padre')->nullable();

            $table->string('nombre_madre_tutor')->nullable();
            $table->boolean('tiene_tutora')->nullable();
            $table->string('profesion_ocupacion_madre')->nullable();
            $table->string('tel_trabajo_madre')->nullable();
            $table->string('celular_madre')->nullable();

            $table->string('tel_casa')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('colonia')->nullable();
            $table->string('cp')->nullable();

            $table->string('tel_otro')->nullable();
            $table->string('parentesco_otro')->nullable();

            $table->string('colegiatura')->nullable();

            $table->string('grado')->nullable();
            $table->string('ciclo_escolar')->nullable();
            $table->string('imagen')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
