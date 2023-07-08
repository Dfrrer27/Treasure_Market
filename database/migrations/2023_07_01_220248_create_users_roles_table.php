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
        Schema::create('users_roles', function (Blueprint $table) {
            $table->unsignedBigInteger('roles_idroles');
            $table->unsignedBigInteger('usuario_idusuario');

            $table->primary(['usuario_idusuario', 'roles_idroles']);
            $table->foreign('roles_idroles')->references('idroles')->on('roles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('usuario_idusuario')->references('idusuario')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_roles');
    }
};
