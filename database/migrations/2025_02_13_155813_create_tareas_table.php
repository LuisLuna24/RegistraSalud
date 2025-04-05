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
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',50);
            $table->string('descripcion',255);
            $table->string('resultados',255);
            $table->string('resultados_paciente',255);
            $table->unsignedBigInteger('id_bitacora')->nullable();
            $table->foreign('id_bitacora')->references('id')->on('bitacoras')->onDelete('cascade');
            $table->tinyInteger('estatus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas');
    }
};
