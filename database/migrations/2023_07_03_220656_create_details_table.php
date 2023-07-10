<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('details', function (Blueprint $table) {
            $table->unsignedBigInteger('sales_idventas');
            $table->unsignedBigInteger('products_idproductos');
            $table->integer('cantidad')->nullable();
            $table->decimal('precio_unitario', 10, 2)->nullable();
            $table->decimal('subtotal', 10, 2)->nullable();

            $table->primary(['sales_idventas', 'products_idproductos']);
            $table->foreign('sales_idventas')->references('idventas')->on('sales')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('products_idproductos')->references('idproductos')->on('products')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
}
