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
        Schema::create('vendidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fabricante');
            $table->string('modelo');
            $table->string('color');
            $table->string('descripcion');
            $table->float('costo');
            $table->timestamp('fecha_venta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendidos');
    }
};
