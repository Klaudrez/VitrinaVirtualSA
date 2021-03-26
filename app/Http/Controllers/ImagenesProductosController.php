<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImagenProductos;

class ImagenesProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagenes= ImagenProductos::all();

        return view('imagenesproductos',compact('imagenes'));
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
        $imagen= new ImagenProductos();
        $imagen->Producto_id= $request->Producto->id;
        $image = $request->file('imagen');
        $image->move('img/imgproductos', $image->getClientOriginalName());
        $imagen->URL = $image->getClientOriginalName();
        $imagen->save();
        return back()->with('mensaje','imagen agregada');
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
        $destroyImagen= ImagenProductos::find($id);
        $destroyImagen->delete();
        return back()->with('mensaje','Imagen eliminada');
    }
}
