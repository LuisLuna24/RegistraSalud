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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_profecional')->nullable();
            $table->foreign('id_profecional')->references('id')->on('profecionales')->onDelete('cascade');
            $table->unsignedBigInteger('id_paciente')->nullable();
            $table->foreign('id_paciente')->references('id')->on('pacientes')->onDelete('cascade');
            $table->dateTime('fecha_hora');
            $table->string('motivo',50)->nullable();
            $table->tinyInteger('estatus')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
