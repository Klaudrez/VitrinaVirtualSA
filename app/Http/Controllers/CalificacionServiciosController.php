<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalificacionServicio;

class CalificacionServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calificaciones= CalificacionServicio::all();
        return view('calificacionserv',compact('calificaciones'));
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
    public function store(Request $request,$id)
    {
        $calificacion= new CalificacionServicio();
        $calificacion->comentario= $request->comentario;
        $calificacion->puntuacion= $request->puntuacion;
        $calificacion->correo= $request->correo;
        $calificacion->Servicios_id= $id;
        $calificacion->Admin_id= $request->Admin_id;
        $calificacion->aprobado= 0;

        $calificacion->save();
        return back()->with('mensaje','Calificacion añadida!');
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
        $calificacion= CalificacionServicio::findOrFail($id);
        return view('calificacionservicio.edit',compact('calificacion'));
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
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroyCalificacion= CalificacionServicio::find($id);
        $destroyCalificacion->delete();
        return back()->with('mensaje','Calificacion eliminada');
    }

    
    public function showPendientes()
    {
        $pendientes= CalificacionServicio::where('User_id','=',$request->user()->id)->get();

        return view('Admin/comentarios',compact('$pendientes'));
    }
}
