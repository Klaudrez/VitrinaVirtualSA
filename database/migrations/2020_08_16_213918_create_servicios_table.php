<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_servicios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('subname');
            $table->boolean('dePago');
            $table->text('descripcion')->nullable();
            $table->text('contacto');
            $table->text('direccion')->nullable();
            $table->boolean('aprobado');
            $table->timestamps();
            ///////////////relaciones//////////////
            //$table->unsignedInteger('Usuario_id');
            $table->unsignedBigInteger('User_id'); // Relación con User
            $table->foreign('User_id')->references('id')->on('users');
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->foreign('categoria_id')->references('id')->on('categoria_servicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria_servicios');
        Schema::dropIfExists('servicios');
    }
}
