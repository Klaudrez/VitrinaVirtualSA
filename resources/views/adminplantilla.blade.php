@extends('plantilla')

<head>
  <title>@yield('titulo')</title>
</head>

@section('sidebar')
    @parent
    @section('admin')
    <li class="nav-item active">
        <a class="nav-link text-white" href="#">Publicaciones</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-white" href="#">Comentarios</a>
      </li>
    @endsection
    @yield('contenido1')
@endsection

<!-- PLANTILLA POSIBLEMENTE SE BORRE CUANDO EXISTA ROL ADMIN
     DE MOMENTO NO BORRAR, GRACIAS -->