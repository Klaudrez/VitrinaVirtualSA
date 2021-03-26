<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Producto;
use App\Servicio;
use App\User;
use App\RedSolidaria;
use App\Http\Controllers\Controller;

class DestacadosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
   public function indexDestacados()
   {
       $productos=Producto::where('dePago','=',1)->get();
       $servicios=Servicio::where('dePago','=',1)->get();
       return view('Admin/destacar',compact('productos','servicios'));
   }

   public function deleteProductoDestacado($id)
   {
       $producto= Producto::find($id);
       $producto->dePago=0;
       $producto->save();
       return back()->with('mensaje','Producto eliminado de destacados');

   }

   public function addProductoDestacado($id)
   {
        $destacado=Producto::find($id);
        $destacado->dePago=1;
        $destacado->save();

        return back()->with('mensaje','Producto añadido a destacados !');

   }
   public function addServicioDestacado($id)
   {
        $destacado=Servicio::find($id);
        $destacado->dePago=1;
        $destacado->save();

        return back()->with('mensaje','Servicio añadido a destacados !');

   }

   public function indexNoDestacados()
   {
       $productos=Producto::where('dePago','=',0)->where('aprobado','=',1)->get();
       $servicios=Servicio::where('dePago','=',0)->where('aprobado','=',1)->get();
       return view('Admin/adddestacar',compact('productos','servicios'));
   }
}
