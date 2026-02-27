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
        Schema::create('tb_comidas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_comida');
            $table->decimal(('costo_comida'), 8, 2);
            $table->string('descripcion_comida');
            $table->unsignedBigInteger('id_tb_tipo_comidas');
            $table->timestamps();

            $table->foreign('id_tb_tipo_comidas')->references('id')->on('tb_tipo_comidas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_comidas');
    }
};
