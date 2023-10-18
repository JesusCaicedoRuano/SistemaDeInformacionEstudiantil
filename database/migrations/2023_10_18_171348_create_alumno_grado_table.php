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
        Schema::create('alumno_grado', function (Blueprint $table) {
            $table->id();
            $table->foreignId('grado_id')->nullable()->constrained('grados')->onDelete('cascade');
            $table->foreignId('alumno_id')->nullable()->constrained('alumnos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumno_grado');
    }
};
