<?php

namespace App\Http\Controllers;

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



class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos= Producto::all();

        return view('productos',compact('productos'));
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
    public function show(Request $request, $id)
    {
        $producto= Producto::find($id);
        $email=User::where('id','=',$producto->User_id)->get();
        $imgproducto= ImagenProductos::where('Producto_id','=',$id)->get()->makeHidden(['id','descripcion','created_at','updated_at','Producto_id']);
        $calificacionesproducto= CalificacionProducto::where('producto_id','=',$producto->id)->where('aprobado','=',1)->get();
        return view('Publico/detalleprod',compact('producto','email','imgproducto','calificacionesproducto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    

    public function showProductosByCategoria($id)
    {
        $productos= Producto::where('categoria_id','=',$id)->where('aprobado','=',1)->orderBy('id', 'desc')->get();
        $servicios = Servicio::where('categoria_id','=',$id)->where('aprobado','=',1)->orderBy('id', 'desc')->get();
        $categoria= CategoriaProducto::find($id);
        $imgproductos=array();
        $imgservicios=array();
        foreach($productos as $item)
        {
            array_push($imgproductos,ImagenProductos::where('Producto_id','=',$item->id)->get());
          
        }
        foreach($servicios as $item)
        {
            array_push($imgservicios,ImagenServicios::where('Servicio_id','=',$item->id)->get());
            
        }
        $namecategoria= $categoria->name;
        

        return view('Publico/productos',compact('productos','namecategoria','servicios','imgproductos','imgservicios'));

    }

}
