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
        Schema::create('vacunadets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vacuna_id');
            $table->unsignedBigInteger('ganado_id');
            $table->date('fecha_dosis');
            $table->date('fecha_proxima_dosis');            
            $table->timestamps();
            $table->foreign('vacuna_id')->references('id')->on('vacunas')->onUpdate('cascade');
            $table->foreign('ganado_id')->references('id')->on('ganados')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacunadets');
    }
};
