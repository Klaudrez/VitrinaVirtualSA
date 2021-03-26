<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main(){
        return view('welcome');
    }
    public function acercade(){
        return view('Publico/acercade');
    }
    public function cateprod(){
        return view('Publico/cateprod');
    }
    public function contacto(){
        return view('Publico/contacto');
    }
    public function detalleprod(){
        return view('Publico/detalleprod');
    }
    public function productos(){
        return view('Publico/productos');
    }
    public function solidaria(){
        return view('Publico/solidaria');
    }
    public function misproductos(){
        return view('Usuario/misproductos');
    }
    public function misserv(){
        return view('Usuario/misserv');
    }
    public function missolidarios(){
        return view('Usuario/missolidarios');
    }

    //Crear funciones para calificaciones
    
    public function formeditarprod(){
        return view('Usuario/formeditarprod');
    }

    public function adddestacar(){
        return view('Admin/adddestacar');
    }
    public function destacar(){
        return view('Admin/destacar');
    }
}