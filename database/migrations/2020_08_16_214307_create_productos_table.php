<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_productos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('precio');
            $table->boolean('dePago');
            $table->text('contacto');
            $table->text('descripcion')->nullable();
            $table->integer('aprobado');
            $table->timestamps();
            ///////////////relaciones//////////////
            //$table->unsignedInteger('Usuario_id'); //Usuario ID //Usuario ID
            $table->unsignedBigInteger('User_id'); // Relación con User
            $table->foreign('User_id')->references('id')->on('users');
            //$table->unsignedInteger('categoria_id'); //Usuario ID
            $table->unsignedBigInteger('categoria_id')->nullable(); // Relación con User
            $table->foreign('categoria_id')->references('id')->on('categoria_productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria_productos');;
        Schema::dropIfExists('productos');
    }
}
