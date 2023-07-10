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

        Schema::create('purchases', function (Blueprint $table) {
            $table->id('idcarrito_compra');
            $table->unsignedBigInteger('usuario_idusuario');
            $table->unsignedBigInteger('productos_idproductos');
            $table->integer('cantidad')->nullable();
            $table->timestamps();

            $table->foreign('usuario_idusuario')->references('idusuario')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('productos_idproductos')->references('idproductos')->on('products')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
