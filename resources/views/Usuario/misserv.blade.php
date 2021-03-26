@extends('plantilla')

@section('titulo', 'Mis Publicaciones')

@section('contenido')
<hr>
<h1 class="my-2 text-center fondoicon">Mis Servicios</h1>
<hr>
<div class="container my-3">
    @if(session('mensaje'))
        <div class="alert alert-danger">
            {{session('mensaje')}}
        </div>
    @endif
    <div class="overflow-auto scroll2">
    @foreach($servicios as $item)
    <div class="card my-3 border-0 publicacion">
        <div class="card-body cardsolidario">
        <div class="row">
            <div class="col-md-3">
                <img src="img/Profe.png" alt="" class="img-fluid " >
                </div>
            <div class="col-md-9">
                <div class="float-right">
                <span><a href="{{route('editarserv',$item->id)}}"><i class="fas fa-edit text-success"></a></i></span>
                <span><a href="{{route('eliminarservicio',$item->id)}}"><i class="fas fa-trash-alt text-danger"></a></i></span>
                </div>
                <h3>{{$item->name}}</h3>
            <h4 class="textosolidario mr-3 ocultar-div">{{$item->subname}}</h4>
                <br><br><br>
            </div>
        </div>
        </div>
    </div>
    @endforeach

    </div>
</div>
@endsection