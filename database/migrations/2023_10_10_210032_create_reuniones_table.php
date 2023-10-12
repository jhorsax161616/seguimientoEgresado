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
        Schema::create('reuniones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_egresado');
            $table->datetime('fecha');
            $table->string('lugar', 100);
            $table->string('agenda', 255);
            $table->string('objetivo', 255);

            $table->timestamps();

            $table->foreign("id_egresado")
            ->references('id')
            ->on('egresados')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reuniones');
    }
};
