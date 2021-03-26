<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagenSolidariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagen_solidarios', function (Blueprint $table) {
            $table->id();
            $table->string('URL');
            $table->unsignedBigInteger('Solidario_id');
            $table->foreign('Solidario_id')->references('id')->on('red_solidarias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagen_solidarios');
    }
}
