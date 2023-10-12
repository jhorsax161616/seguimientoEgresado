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
        Schema::create('plan_trabajos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cronograma')->unique()->nullable();
            $table->unsignedBigInteger('id_evaluacion')->unique()->nullable();
            $table->unsignedBigInteger('id_egresado')->unique();
            $table->string('informe', 255);

            $table->timestamps();

            $table->foreign("id_egresado")
            ->references('id')
            ->on('egresados')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign("id_cronograma")
            ->references('id')
            ->on('cronograma_egresados')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->foreign("id_evaluacion")
            ->references('id')
            ->on('evaluacion_trabajos')
            ->onDelete('set null')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_trabajos');
    }
};
