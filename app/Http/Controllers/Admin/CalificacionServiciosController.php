<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\CalificacionServicio;
use App\Http\Controllers\Controller;

class CalificacionServiciosController extends Controller
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
        $aprobar= CalificacionServicio::find($id);
        $aprobar->aprobado= 1;
        $aprobar->save();

        return back()->with('mensaje','Calificacion aprobada para su visualización');
    }

    public function rechazar($id)
    {
        $rechazar= CalificacionServicio::find($id);
        $rechazar->aprobado=2;
        $rechazar->save();

        return back()->with('mensaje','Calificacion rechazada.');
    }

    public function showPendientes()
    {
        $pendientes= CalificacionServicio::where('User_id','=',$request->user()->id)->get();

        return view('Admin/comentarios',compact('$pendientes'));
    }
}
