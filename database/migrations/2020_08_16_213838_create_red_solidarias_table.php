<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRedSolidariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('red_solidarias', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('aprobado');  //0:pendiente 1:aprobado 2:rechazado
            $table->text('descripcion');
            $table->string('contacto');
            $table->string('img')->nullable();   //name=imgsolidaria
            $table->timestamps();
            ///////////////relaciones//////////////
            //$table->unsignedInteger('User_id'); //Usuario ID
            $table->unsignedBigInteger('User_id');
            $table->foreign('User_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('red_solidarias');
    }
}
