<?php

namespace App\Http\Controllers\Admin;

use App\RedSolidaria;
use Illuminate\Http\Request;
use App\ImagenSolidario;
use App\User;
use App\Http\Controllers\Controller;

class SolidariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function aprobar($id)
    {
        $aprobar= Redsolidaria::find($id);
        $aprobar->aprobado=1;
        $aprobar->save();

        return back()->with('mensaje','Servicio solidario aprobado');
    }

    public function rechazar($id)
    {
        $rechazar= RedSolidaria::find($id);
        $rechazar->aprobado=2;
        $rechazar->save();
        return back()->with('mensaje','Servicio solidario rechazado.');
    }

    

    public function eliminar($id)
    {
        $destroySolidario= RedSolidaria::find($id);

        $destroySolidario->delete();
        return back()->with('mensaje','Solidaria eliminada');
    }

}
