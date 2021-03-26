<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function Usuario(){ //$RRSS->User->nombre
        return $this->belongsTo(Usuario::class); //Pertenece a un Usuario 
    }
    public function Admin(){ //$RRSS->User->nombre
        return $this->belongsTo(Admin::class); //Pertenece a un Usuario 
    }
    public function categoria(){
        return $this->belongsTo(CategoriaProducto::class); // 
    }
   
}
