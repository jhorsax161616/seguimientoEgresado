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
        Schema::create('egresados', function (Blueprint $table) {
            
            $table->id();
            $table->string('nombre', 250);
            $table->string('grado_instruccion', 200);
            $table->string('especializacion', 200);
            $table->date('fecha_egreso');
            $table->date('fecha_titulo')->nullable();
            $table->date('fecha_maestria')->nullable();
            $table->date('fecha_doctorado')->nullable();
            $table->string('cargo_empresa', 150)->nullable();
            $table->string('tiempo_laboral', 30)->nullable();
            $table->unsignedBigInteger('id_empresa')->nullable();

            $table->timestamps();

            $table->foreign("id_empresa")
            ->references('id')
            ->on('empresas')
            ->onDelete('set null')
            ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('egresados');
    }
};
