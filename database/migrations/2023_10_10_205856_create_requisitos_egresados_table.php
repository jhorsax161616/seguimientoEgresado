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
        Schema::create('requisitos_egresados', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_egresado')->unsigned();
            $table->integer("estado");
            $table->string('solicitud_decano', 200);
            $table->string('recibo', 200);
            $table->string('certificado', 255);
            $table->string('fotografia', 255);
            $table->string('certificado_ofimatica', 255);

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
        Schema::dropIfExists('requisitos_egresados');
    }
};
