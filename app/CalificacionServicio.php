<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalificacionServicio extends Model
{
    public function Servicio(){ //$RRSS->User->nombre
        return $this->belongsTo(Servicio::class); //Pertenece a un Usuario 
    }
    public function Admin(){ //$RRSS->User->nombre
        return $this->belongsTo(Admin::class); //Pertenece a un Usuario 
    }
}
