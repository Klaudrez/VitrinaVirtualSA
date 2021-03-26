<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalificacionUsuario;

class CalificacionUsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calificacionesUsuarios= CalificacionUsuario::all();
        return view('calificacionusuarios',compact('calificacionesUsuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $calificacion= new CalificacionUsuario();
        $calificacion->comentario= $request->comentario;
        $calificacion->puntuacion= $request->puntuacion;
        $calificacion->correo= $request->correo;
        $calificacion->User_id= $request->User_id;
        $calificacion->Admin_id= $request->Admin_id;
        $calificacion->aprobado=0;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroyCalificacion= CalificacionUsuario::find($id);
        $destroyCalificacion->delete();
        return back()->with('mensaje','Calificacion eliminada.');
    }

    public function aprobar($id)
    {
        $aprobar= CalificacionUsuario::find($id);
        $aprobar->aprobado=1;
        $aprobar->save();
        return back()->with('mensaje','Calificacion aprobada');
    }

    public function rechazar($id)
    {
        $rechazar= CalificacionUsuario::find($id);
        $rechazar->aprobado=2;
        $rechazar->save();
        return back()->with('mensaje','Calificacion rechazada');
    }
}
