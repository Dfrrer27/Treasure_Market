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
        Schema::create('products', function (Blueprint $table) {
            $table->id('idproductos');
            $table->string('nombre', 20)->nullable();
            $table->string('descripcion', 80)->nullable();
            $table->string('marca', 60);
            $table->decimal('precio', 8, 2)->nullable();
            $table->unsignedBigInteger('categoria_idcategoria');
            $table->integer('descuento');
            $table->string('img', 200)->nullable();
            $table->timestamps();

            $table->foreign('categoria_idcategoria')->references('idcategoria')->on('categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
