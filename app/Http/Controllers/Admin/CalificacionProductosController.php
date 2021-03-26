<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\CalificacionProducto;
use App\CalificacionServicio;
use App\Http\Controllers\Controller;

class CalificacionProductosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function aprobar($id)
    {
        $aprobar= CalificacionProducto::find($id);
        $aprobar->aprobado=1;
        $aprobar->save();
        return back()->with('mensaje','Calificacion aprobada');

    }

    public function rechazar($id)
    {
        $rechazar= CalificacionProducto::find($id);
        $rechazar->aprobado=2;
        $rechazar->save();
        return back()-> with('mensaje','Calificacion rechazada');     
    }

    public function showComentariosPendientes()
    {
        $comentarios= CalificacionProducto::where('aprobado','=',0)->get();
        $comentariosservicios= CalificacionServicio::where('aprobado','=',0)->get();
        return view('Admin/comentarios',compact('comentarios','comentariosservicios'));
    }
}
