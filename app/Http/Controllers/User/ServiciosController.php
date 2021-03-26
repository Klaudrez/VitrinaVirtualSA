<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Servicio;
use App\RRSS;
use App\ImagenServicios;
use App\User;
use App\CalificacionServicio;
use App\Http\Controllers\Controller;

class ServiciosController extends Controller
{
    public function __construct(){
        $this->middleware('auth:web');
    }
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicio= new Servicio();
        $servicio->name= $request->name;
        $servicio->subname= $request->subname;
        $servicio->dePago= $request->dePago;
        $servicio->descripcion= $request->descripcion;
        $servicio->contacto= $request->contacto;
        $servicio->direccion= $request->direccion;
        $servicio->dePago=0;
        $servicio->aprobado=0;
        $servicio->User_id= $request->user()->id;
        $servicio->categoria_id=$request->categoria_id;

        $servicio->save();


        $rrss= new RRSS();
        $rrss->facebook=$request->facebook;
        $rrss->Instagram=$request->Instagram;
        $rrss->Twitter= $request->Twitter;
        $rrss->User_id= $request->user()->id;

        $rrss->save();

        $imagen= new ImagenServicios();
        $imagen->Servicio_id= $servicio->id;
        $image = $request->file('imgserv');
        $image->move('img/imgservicios', $image->getClientOriginalName());
        $imagen->URL = $image->getClientOriginalName();
        $imagen->save();

        return back()->with('mensaje','Servicio enviado, La aprobación de su publicación será en breve.');
    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicio= Servicio::findOrFail($id);

        return view('Usuario/formeditarserv',compact('servicio'));
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
    public function destroy($id)
    {
        $destroyServicio= Servicio::find($id);
        $destroyImagenServicio= ImagenServicios::where('Servicio_id','=',$destroyServicio->id)->get();
        foreach($destroyImagenServicio as $item)
        {
            $item->delete();
        }
        
        $destroyServicio->delete();
        return back()->with('mensaje','Servicio eliminado');
    }


    public function viewMyServicios(Request $request)
    {
        $servicios= Servicio::where('User_id','=',$request->user()->id)->where('aprobado','=',1)->get();
        $imgservicios= array();
        foreach($servicios as $item)
        {
            array_push($imgservicios,ImagenServicios::where('Servicio_id','=',$item->id)->get());
        }
         

        return view('Usuario/misserv',compact('servicios','imgservicios'));
    }

    public function showServiciosByCategoria($id)
    {
        

    }
}
