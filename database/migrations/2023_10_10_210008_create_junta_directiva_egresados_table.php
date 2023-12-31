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
        Schema::create('junta_directiva_egresados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_egresado')->unique();
            $table->unsignedBigInteger('tipo_cargo')->nullable();
            $table->string('periodo', 15);

            $table->timestamps();

            $table->foreign("id_egresado")
            ->references('id')
            ->on('egresados')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign("tipo_Cargo")
            ->references('id')
            ->on('tipo_cargos')
            ->onDelete('set null')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('junta_directiva_egresados');
    }
};
