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
        Schema::create('evaluacion_egresados', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('id_empresa')->unsigned();
            $table->bigInteger('id_formato')->unsigned();

            $table->timestamps();

            $table->foreign("id_empresa")
            ->references('id')
            ->on('empresas')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign("id_formato")
            ->references('id')
            ->on('formatos_tipos_evaluaciones')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacion_egresados');
    }
};
