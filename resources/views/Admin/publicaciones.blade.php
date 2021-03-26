@extends('plantilla')

@section('titulo', 'Publicaciones')

@section('contenido')
<hr>
<h1 class="my-2 text-center fondoicon">Validar Publicaciones</h1>
<hr>
<div class="container my-3">
    @if(session('mensaje'))
        <div class="alert alert-danger">
            {{session('mensaje')}}
        </div>
    @endif
    <div class="overflow-auto scroll2">
    @foreach($publicacionProducto as $item)
    <div class="card my-3 border-0 publicacion">
        <div class="card-body cardsolidario">
        <div class="row">
            <div class="col-md-3">
                <img src="img/solidaridad.jpg" alt="" class="img-fluid" >
                </div>
            <div class="col-md-9">
                <div class="float-right">
                <span><a href="{{route('aprobarpublicacionproducto',$item->id)}}"><i class="fas fa-check text-success"></a></i></span>
                <span><a href="{{route('rechazarpublicacionproducto',$item->id)}}"><i class="fas fa-trash-alt text-danger"></a></i></span>
                </div>
                <h3>{{$item->name}}</h3>
            <h4 class="textosolidario mr-3">{{$item->descripcion}}</h4>
                <br><br><br>
            </div>
        </div>
        </div>
    </div>

    @endforeach

    @foreach($publicacionServicio as $item)
    <div class="card my-3 border-0 publicacion">
        <div class="card-body cardsolidario">
        <div class="row">
            <div class="col-md-3">
                <img src="img/solidaridad.jpg" alt="" class="img-fluid" >
                </div>
            <div class="col-md-9">
                <div class="float-right">
                <span><a href="{{route('aprobarpublicacionservicio',$item->id)}}"><i class="fas fa-check text-success"></a></i></span>
                <span><a href="{{route('rechazarpublicacionservicio',$item->id)}}"><i class="fas fa-trash-alt text-danger"></a></i></span>
                </div>
                <h3>{{$item->name}}</h3>
            <h4 class="textosolidario mr-3">{{$item->descripcion}}</h4>
                <br><br><br>
            </div>
        </div>
        </div>
    </div>

    @endforeach

    @foreach($publicacionSolidaria as $item)
    <div class="card my-3 border-0 publicacion">
        <div class="card-body cardsolidario">
        <div class="row">
            <div class="col-md-3">
                <img src="img/solidaridad.jpg" alt="" class="img-fluid" >
                </div>
            <div class="col-md-9">
                <div class="float-right">
                <span><a href="{{route('aprobarpublicacionsolidaria',$item->id)}}"><i class="fas fa-check text-success"></a></i></span>
                <span><a href="{{route('rechazarpublicacionsolidaria',$item->id)}}"><i class="fas fa-trash-alt text-danger"></a></i></span>
                </div>
                <h3>{{$item->name}}</h3>
            <h4 class="textosolidario mr-3">{{$item->descripcion}}</h4>
                <br><br><br>
            </div>
        </div>
        </div>
    </div>

    @endforeach
    </div>
</div>
@endsection