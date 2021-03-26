<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalificacionProducto extends Model
{
    public function Producto(){ //$RRSS->User->nombre
        return $this->belongsTo(Producto::class); //Pertenece a un Usuario 
    }
    public function Admin(){ //$RRSS->User->nombre
        return $this->belongsTo(Admin::class); //Pertenece a un Usuario 
    }
}
