<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    public function Usuario(){ //$RRSS->User->nombre
        return $this->belongsTo(User::class); //Pertenece a un Usuario 
    }
    public function Admin(){ //$RRSS->User->nombre
        return $this->belongsTo(Admin::class); //Pertenece a un Usuario 
    }
    public function categoria(){
        return $this->belongsTo(CategoriaServicio::class); // 
    }
}
