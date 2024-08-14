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
        Schema::create('food_students', function (Blueprint $table) {
            $table->id();
            $table->boolean('lunes')->default(false);
            $table->boolean('martes')->default(false);
            $table->boolean('miercoles')->default(false);
            $table->boolean('jueves')->default(false);
            $table->boolean('viernes')->default(false);
            $table->unsignedBigInteger("food_id")->nullable();
            $table->unsignedBigInteger("inscriptions_id")->nullable();

            $table->timestamps();

            $table->foreign("inscriptions_id")->references('id')->on('inscriptions');
            $table->foreign("food_id")->references('id')->on('foods');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_students');
    }
};
