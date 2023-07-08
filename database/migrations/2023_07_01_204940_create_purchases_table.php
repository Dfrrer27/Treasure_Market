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
            $table->unsignedBigInteger('users_idusuario');
            $table->unsignedBigInteger('products_idproductos');
            $table->integer('cantidad')->nullable();
            $table->timestamps();

            $table->foreign('users_idusuario')->references('idusuario')->on('users');
            $table->foreign('products_idproductos')->references('idproductos')->on('products');
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
