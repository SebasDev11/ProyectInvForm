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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_Region'); // Relación con categorias
            $table->foreign('id_Region')->references('id')->on('regions'); // clave foranea
            $table->string('firstName');
            $table->string('LastName');
            $table->string('dni');
            $table->string('email');
            $table->string('telefono');
            $table->date('date_at');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
