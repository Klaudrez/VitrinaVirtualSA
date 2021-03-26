<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RRSS extends Model
{
    public function RRSSUser(){ //$RRSS->User->nombre
        return $this->hasOne(User::class); //Pertenece a un Usuario 
    }
}
