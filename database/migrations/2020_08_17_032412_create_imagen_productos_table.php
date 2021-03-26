<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagenProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagen_productos', function (Blueprint $table) {  // name='imgprod' 'imgserv' en formulario
            $table->id();
            $table->string('URL');
            $table->text('descripcion')->nullable();
            $table->timestamps();
            ///////////////relaciones//////////////
            //$table->unsignedInteger('Producto_id'); //Usuario ID //Usuario ID
            $table->unsignedBigInteger('Producto_id'); // Relación con User
            $table->foreign('Producto_id')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagen_productos');
    }
}
