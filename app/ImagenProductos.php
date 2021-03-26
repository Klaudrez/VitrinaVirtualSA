<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagenProductos extends Model
{
    public function producto(){ //$RRSS->User->nombre
        return $this->belongsTo(producto::class); //Pertenece a un Usuario 
    }
}
