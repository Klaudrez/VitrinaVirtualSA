<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalificacionProducto;
use App\CalificacionServicio;

class CalificacionProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calificaciones= CalificacionProducto::all();
        return view('Admin/comentarios',compact('calificaciones'));
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
        $calificacion= new CalificacionProducto();
        $calificacion->comentario= $request->comentario;
        $calificacion->puntuacion = $request->puntuacion;
        $calificacion->correo= $request->correo;
        $calificacion->Producto_id= $id;
        $calificacion->aprobado=0;

        $calificacion->save();
        return back()->with('mensaje','Comentario enviado!');

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
        $destroyCalificacion=CalificacionProducto::find($id);
        $destroyCalificacion->delete();
        return back()->with('mensaje','Calificacion eliminada');
    }
}
