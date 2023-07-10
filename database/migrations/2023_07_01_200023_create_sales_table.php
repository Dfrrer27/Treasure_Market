<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id('idventas');
            $table->unsignedBigInteger('usuario_idcomprador');
            $table->unsignedBigInteger('usuario_idvendedor');
            $table->integer('cantidad')->nullable();
            $table->date('fecha_venta')->nullable();
            $table->decimal('precio_venta', 8, 2)->nullable();
            $table->unsignedBigInteger('metodo_pago_idmetodo_pago');
            $table->timestamps();

            $table->foreign('usuario_idcomprador')->references('idusuario')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('usuario_idvendedor')->references('idusuario')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('metodo_pago_idmetodo_pago')->references('idmetodo_pago')->on('payments')->onDelete('cascade')->onUpdate('cascade');
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
