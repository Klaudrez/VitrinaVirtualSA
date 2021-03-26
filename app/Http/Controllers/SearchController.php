<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Servicio;

class SearchController extends Controller
{
    public function busqueda(){
        return view('Publico/busqueda');
    }

    public function searchbyText(Request $request)
    {
        
        $search= Producto::where('name','LIKE','%'.$request->search.'%')->where('aprobado', '=', 1)->orderBy('id', 'desc')->get();
        $searchServicio= Servicio::where('name','LIKE','%'.$request->search.'%')->where('aprobado', '=', 1)->orderBy('id', 'desc')->get();
        $query=$request->search;
        return view('Publico/busqueda',compact('search','query','searchServicio'));

    }
}
