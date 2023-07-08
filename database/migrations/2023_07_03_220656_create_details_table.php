<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->integer('cantidad')->nullable();
            $table->decimal('precio_unitario', 10, 2)->nullable();
            $table->decimal('subtotal', 10, 2)->nullable();
            $table->unsignedBigInteger('sales_idventas');
            $table->unsignedBigInteger('products_idproductos');
            
            $table->primary(['sales_idventas', 'products_idproductos']);
            $table->foreign('sales_idventas')->references('idventas')->on('sales')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->foreign('products_idproductos')->references('idproductos')->on('products')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details');
    }
}
