<?php

namespace App\Http\Controllers\User;

use App\RedSolidaria;
use Illuminate\Http\Request;
use App\ImagenSolidario;
use App\User;
use App\Http\Controllers\Controller;


class SolidariosController extends Controller
{
    public function __construct(){
        $this->middleware('auth:web');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $solidario= new RedSolidaria();
        $solidario->name= $request->name;
        $solidario->aprobado= 0;
        $solidario->descripcion= $request->descripcion;
        $solidario->contacto= $request->contacto;
        $solidario->User_id= $request->user()->id;
        $solidario->save();

        $imagen= new ImagenSolidario();
        $imagen->Solidario_id= $solidario->id;
        $image = $request->file('imgsol');
        $image->move('img/imgsolidario', $image->getClientOriginalName());
        $imagen->URL = $image->getClientOriginalName();
        $imagen->save();

        
        return back()->with('mensaje','Solidario agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        $solidario= RedSolidaria::findOrFail($id);
        
        return view('solidario.edit',compact('solidario'));
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
        $updateSolidaria= RedSolidaria::find($id);
        $updateSolidaria->name= $request->name;
        $updateSolidaria->descripcion= $request->descripcion;
        $updateSolidaria->contacto= $request->contacto;
        $updateSolidaria->img= $request->img;

        $updateSolidaria->save();
        return back()->with('mensaje','Servicio solidario actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroySolidario= RedSolidaria::find($id);

        $destroySolidario->delete();
        return back()->with('mensaje','Solidario eliminado');
    }

    public function showPublicacionesSolidarias(Request $request)
    {
        $publicaciones= RedSolidaria::where('User_id','=',$request->user()->id)->where('aprobado','=',1)->get();
        $imgsolidario=array();
        foreach($publicaciones as $item)
        {
            array_push($imgsolidario,ImagenSolidario::where('Solidario_id','=',$item->id)->get()->makeHidden(['id','created_at','updated_at','Solidario_id']));
        }

        return view('Usuario/missolidarios',compact('publicaciones','imgsolidario'));
    }

    public function eliminar($id)
    {
        $destroySolidario= RedSolidaria::find($id);

        $destroySolidario->delete();
        return back()->with('mensaje','Solidaria eliminada');
    }

}
