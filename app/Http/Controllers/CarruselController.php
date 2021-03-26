<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Servicio;
use App\ImagenProductos;
use App\ImagenServicios;
use App\ImagenSolidario;
use App\RedSolidaria;

class CarruselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos= Producto::where('dePago','=',1)->get()->take(3);
        $servicios= Servicio::where('dePago','=',1)->get()->take(3);
        $solidarios= RedSolidaria::take(3);
        $imgproductos= array();
        $imgservicios= array();
        $imgsolidarios= array();
        foreach($productos as $item)
        {
            array_push($imgproductos,ImagenProductos::where('Producto_id','=',$item->id)->get());
        }
        foreach($servicios as $item)
        {
            array_push($imgservicios,ImagenServicios::where('Servicio_id','=',$item->id)->get());
        }
        foreach($solidarios as $item)
        {
            array_push($imgsolidarios,ImagenSolidario::where('Solidarios_id','=',$item->id)->get()->makeHidden(['id','created_at','updated_at','Solidario_id']));
        }

        return view('welcome',compact('imgproductos','imgservicios','productos','servicios','solidarios','imgsolidarios'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
