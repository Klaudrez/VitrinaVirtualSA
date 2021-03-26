<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalificacionUsuario extends Model
{
    public function Usuario(){ //$RRSS->User->nombre
        return $this->belongsTo(Producto::class); //Pertenece a un Usuario 
    }
    public function Admin(){ //$RRSS->User->nombre
        return $this->belongsTo(User::class); //Pertenece a un Usuario 
    }
}
