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
        Schema::create('cronograma_egresados', function (Blueprint $table) {
            
            $table->id();
            $table->string('numero', 10);
            $table->string('actividad', 250);
            $table->datetime('fecha');
            $table->string('periodo', 15);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cronograma_egresados');
    }
};
