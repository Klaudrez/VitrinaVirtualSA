<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacion_productos', function (Blueprint $table) {
            $table->id();
            $table->text('comentario');
            $table->integer('puntuacion');
            $table->string('correo');
            $table->timestamps();
            ///////////////relaciones//////////////
            //$table->unsignedInteger('Producto_id'); //Usuario ID //Usuario ID
            $table->unsignedBigInteger('producto_id'); // Relación con User
            $table->foreign('producto_id')->references('id')->on('productos');
            //$table->unsignedInteger('Admin_id'); //Usuario ID
            $table->unsignedBigInteger('Admin_id')->nullable(); // Relación con User
            $table->foreign('Admin_id')->references('id')->on('admins');
            $table->integer('aprobado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calificacion_productos');
    }
}
