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
        Schema::create('sales', function (Blueprint $table) {
            $table->id('idventas');
            $table->unsignedBigInteger('users_idcomprador');
            $table->unsignedBigInteger('products_idproductos');
            $table->unsignedBigInteger('users_idvendedor');
            $table->integer('cantidad')->nullable();
            $table->date('fecha_venta')->nullable();
            $table->decimal('precio_venta', 8, 2)->nullable();
            $table->unsignedBigInteger('payments_idmetodo_pago');
            $table->timestamps();

            $table->foreign('users_idcomprador')->references('idusuario')->on('users');
            $table->foreign('products_idproductos')->references('idproductos')->on('products');
            $table->foreign('users_idvendedor')->references('idusuario')->on('users');
            $table->foreign('payments_idmetodo_pago')->references('idmetodo_pago')->on('payments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
