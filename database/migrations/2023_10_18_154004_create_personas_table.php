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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombres',255);
            $table->string('apellidos',255);
            $table->string('tipo_persona',20);
            $table->string('telefono',11);
            $table->string('acudiente',255);
            $table->tinyinteger('estado')->default(1);
            $table->foreignId('documento_id')->unique()->constrained('documentos')->ondele('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
