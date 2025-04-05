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
        Schema::create('subscripciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->decimal('precio',10,2);
            $table->decimal('precio_oferta',10,2)->nullable();
            $table->integer('duracion');
            $table->integer('no_pacientes');
            $table->integer('no_empleados');
            $table->tinyInteger('estatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscripciones');
    }
};
