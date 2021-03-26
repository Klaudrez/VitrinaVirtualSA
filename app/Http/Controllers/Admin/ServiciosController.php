<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Servicio;
use App\RRSS;
use App\ImagenServicios;
use App\User;
use App\CalificacionServicio;
use App\Http\Controllers\Controller;

class ServiciosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
   
    public function aprobar($id)
    {
        $aprobar= Servicio::find($id);
        $aprobar->aprobado= 1;
        $aprobar->save();

        return back()->with('mensaje','Servicio aprobado para su publicación');
    }

    public function rechazar($id)
    {
        $rechazar= Servicio::find($id);
        $rechazar->aprobado= 2;
        $rechazar->save();

        return back()->with('mensaje','Servicio rechazado');
    }

    
    public function showServiciosByCategoria($id)
    {
        

    }
}
