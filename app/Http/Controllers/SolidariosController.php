<?php

namespace App\Http\Controllers;

use App\RedSolidaria;
use Illuminate\Http\Request;
use App\ImagenSolidario;
use App\User;


class SolidariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solidarios= RedSolidaria::all();

        return view('solidarios', compact('solidarios'));
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
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $solidarios= RedSolidaria::where('aprobado','=',1)->get();
        $imgsolidario=array();
        foreach($solidarios as $item)
        {
            array_push($imgsolidario,ImagenSolidario::where('Solidario_id','=',$item->id)->get()->makeHidden(['id','created_at','updated_at','Solidario_id']));
        }
        
        return view('Publico/solidaria',compact('solidarios', 'imgsolidario'));
    }

    /**
     * Show the form for editing the specified resource.
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

}
