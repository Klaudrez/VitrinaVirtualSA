<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacion_servicios', function (Blueprint $table) {
            $table->id();
            $table->text('comentario');
            $table->integer('puntuacion');
            $table->string('correo');
            $table->timestamps();
            ///////////////relaciones//////////////
            //$table->unsignedInteger('Servicio_id'); //Usuario ID //Usuario ID
            $table->unsignedBigInteger('Servicios_id'); // Relación con User
            $table->foreign('Servicios_id')->references('id')->on('servicios');
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
        Schema::dropIfExists('calificacion_servicios');
    }
}
