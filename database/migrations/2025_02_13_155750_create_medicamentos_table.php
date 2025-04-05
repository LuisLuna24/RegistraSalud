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
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id();
            $table->string( 'nombre');
            $table->decimal('dosis',10,2);
            $table->string('duracion',50);
            $table->string('indicaciones',255);
            $table->unsignedBigInteger('id_receta')->nullable();
            $table->foreign('id_receta')->references('id')->on('recetas')->onDelete('cascade');
            $table->unsignedBigInteger('id_unidad_medida')->nullable();
            $table->foreign('id_unidad_medida')->references('id')->on('unidades_medidas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicamentos');
    }
};
