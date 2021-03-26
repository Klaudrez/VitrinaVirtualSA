<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Mensaje;
use App\Http\Controllers\Controller;

class MensajesController extends Controller
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
    public function index()
    {
        $mensajes= Mensaje::all();

        return view('Admin/mensajes', compact('mensajes'));  
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
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        $destroyMensaje= Mensaje::find($id);
        $destroyMensaje->delete();

        return back()->with('mensaje','Mensaje eliminado');
    }
}
