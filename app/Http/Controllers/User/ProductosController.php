<?php

namespace App\Http\Controllers\User;

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
    public function store(Request $request)
    {   //Datos producto
        $producto= new Producto();
        $producto->name= $request->name;
        $producto->precio= $request->precio;
        $producto->dePago= 0;
        $producto->contacto= $request->contacto;
        $producto->descripcion= $request->descripcion;
        $producto->aprobado= 0;
        $producto->User_id= $request->user()->id;
        $producto->categoria_id= $request->categoria_id;
        $producto->save();

        //Datos rrss de producto.
        $rrss= new RRSS();
        $rrss->facebook=$request->facebook;
        $rrss->Instagram= $request->Instagram;
        $rrss->Twitter= $request->Twitter;
        $rrss->User_id= $request->user()->id;

        $rrss->save();

        $imagen= new ImagenProductos();
        $imagen->Producto_id= $producto->id;
        $image = $request->file('imgprod');
        $image->move('img/imgproductos', $image->getClientOriginalName());
        $imagen->URL = $image->getClientOriginalName();
        $imagen->save();
        
        return back()->with('mensaje','Producto añadido');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        $email=User::where('id','=',$producto->User_id)->get();
        $rrss= RRSS::where('User_id','=',$producto->User_id)->get();

        return view('Usuario/formeditarprod',compact('producto','email','rrss'));
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
        $updateProducto= Producto::find($id)->first();
        $updateProducto->name= $request->name;
        $updateProducto->precio= $request->precio;
        $updateProducto->contacto= $request->contacto;
        $updateProducto->descripcion =$request->descripcion;
        $updateProducto->categoria_id= $request->categoria_id;
        
        $updateProducto->save();
        /* problemas al actualizar rrss, ya que sólo me permite actualizar una sola colección de datos.




        $updaterrss= RRSS::where('User_id','=',$updateProducto->User_id)->get();
        $updaterrss->facebook=$request->facebook;
        $updaterrss->Instagram= $request->Instagram;
        $updaterrss->Twitter= $request->Twitter;
        $updaterrss->User_id= $request->user()->id;

        $updaterrss->save();



        */
        return back()->with('mensaje','Producto actualizado');
    }

    public function showMisProductos(Request $request)
    {
        $productos= Producto::where('User_id','=',$request->user()->id)->where('aprobado','=',1)->get();
        $imgproductos=array();
        foreach($productos as $item)
        {
            array_push($imgproductos,ImagenProductos::where('Producto_id','=',$item->id)->get()->makeHidden(['id','descripcion','created_at','updated_at','Producto_id']));
        }

        return view('Usuario/misproductos',compact('productos','imgproductos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroyComentarios = CalificacionProducto::where('Producto_id','=',$id)->get();
        foreach($destroyComentarios as $item)
        {
            $item->delete();
        }
        $destroyImagen= ImagenProductos::where('Producto_id','=',$id)->get();
        foreach($destroyImagen as $item)
        {
            $item->delete();
        }
        
        $destroyProducto= Producto::find($id);
        $destroyProducto->delete();

        return back()->with('mensaje','Producto eliminado');
    }
}
