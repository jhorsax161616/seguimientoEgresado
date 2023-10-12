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
        Schema::create('acta_egresados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_reunion')->unique()->nullable();
            $table->unsignedBigInteger('id_junta_directiva')->nullable();
            $table->unsignedBigInteger('id_egresado')->unique();
            $table->string('resultado', 255);
            $table->string('firma_responsable', 255);

            $table->timestamps();

            $table->foreign("id_reunion")
            ->references('id')
            ->on('reuniones')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->foreign("id_junta_directiva")
            ->references('id')
            ->on('junta_directiva_egresados')
            ->onDelete('set null')
            ->onUpdate('cascade');

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
        Schema::dropIfExists('acta_egresados');
    }
};
