<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use App\RRSS;
use App\ImagenServicios;
use App\User;
use App\CalificacionServicio;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios= Servicio::all();

        return view('Usuario/misserv',compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicio= Servicio::find($id);
        $imgservicio= ImagenServicios::where('Servicio_id','=',$servicio->id)->get();
        $email= User::where('id','=',$servicio->User_id)->get();
        $rrss= RRSS::where('User_id','=',$servicio->User_id)->get();
        $calificaciones= CalificacionServicio::where('Servicios_id','=',$servicio->id)->where('aprobado','=',1)->get();

        return view('Publico/detalleserv',compact('servicio','imgservicio','email','rrss','calificaciones'));
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
        $updateServicio= Servicio::find($id);
        $updateServicio->name= $request->name;
        $updateServicio->subname= $request->subname;
        $updateServicio->dePago= $request->dePago;
        $updateServicio->descripcion = $request->descripcion;
        $updateServicio->contacto= $request->contacto;
        $updateServicio->direccion= $request->direccion;
        $updateServicio->categoria_id= $request->categoria_id;

        $updateServicio->save();
        return back()->with('mensaje','Detalles de servicio actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    
   
    public function showServiciosByCategoria($id)
    {
        

    }
}
