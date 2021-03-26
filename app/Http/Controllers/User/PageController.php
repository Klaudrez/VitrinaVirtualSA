<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function __construct(){
        $this->middleware('auth:web');
    }
    
    public function formularioserv(){
        return view('Usuario/formularioserv');
    }
    public function formularioprod(){
        return view('Usuario/formularioprod');
    }
    public function formulariosolidario(){
        return view('Usuario/formulariosolidario');
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
    public function editarserv(){
        return view('Usuario/editarserv');
    }

    public function editarprod(){
        return view('Usuario/editarprod');
    }

    public function formeditarprod(){
        return view('Usuario/formeditarprod');
    }

    public function formeditarserv(){
        return view('Usuario/formeditarserv');
    }
    
    public function perfil(){
        return view('Usuario/perfil');
    }
}
