<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Producto;
use App\RRSS;
use App\CalificacionProducto;
use App\CategoriaProducto;
use App\Servicio;
use App\RedSolidaria;
use App\ImagenProductos;
use App\User;
use App\ImagenServicios;
use App\Http\Controllers\Controller;


class ProductosController extends Controller
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
   
    public function aprobar($id)
    {
        $aprobar= Producto::find($id);
        $aprobar->aprobado=1;
        $aprobar->save();
        return back()->with('mensaje','Publicacion de Producto aprobado.');

    }

    public function rechazar($id)
    {
        $rechazar= Producto::find($id);
        $rechazar->aprobado=2;
        $rechazar->save();
        return back()->with('mensaje','Publicación de producto rechazada.');
        
    }

    public function showPublicacionesPendientes()
    {
        $publicacionProducto= Producto::where('aprobado','=',0)->get();
        $publicacionServicio= Servicio::where('aprobado','=',0)->get();
        $publicacionSolidaria= RedSolidaria::where('aprobado','=',0)->get();

        return view('Admin/publicaciones',compact('publicacionProducto','publicacionServicio','publicacionSolidaria'));

    }
}
