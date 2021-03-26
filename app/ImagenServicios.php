<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagenServicios extends Model
{
    public function Servicio(){ //$RRSS->User->nombre
        return $this->belongsTo(Servicio::class); //Pertenece a un Usuario 
    }
}
