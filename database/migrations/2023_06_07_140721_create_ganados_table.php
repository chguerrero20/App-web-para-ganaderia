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
        Schema::create('ganados', function (Blueprint $table) {
           
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->string('numero');
            $table->string('sexo');
            $table->string('peso');
            $table->unsignedBigInteger('raza_id');
            $table->unsignedBigInteger('proveedor_id');           
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ganados');
    }
};
