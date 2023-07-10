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
        Schema::create('services', function (Blueprint $table) {
            $table->id('idservicio_cliente');
            $table->timestamp('fecha_com')->nullable();
            $table->string('comentario', 900)->nullable();
            $table->unsignedBigInteger('usuario_idusuario');
            $table->timestamps();

            $table->foreign('usuario_idusuario')->references('idusuario')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
