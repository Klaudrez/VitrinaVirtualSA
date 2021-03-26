@extends('plantilla')

@section('titulo', 'Comentarios') 

@section('contenido')
<hr>
<h2 class="my-2 fondoicon">Comentarios por validar : </h2>
<hr>

<div class="container my-3">
    <div class="overflow-auto scroll2">
    @foreach($comentarios as $item)
    <div class="card my-3 border-3 publicacion">
        <div class="card-body cardsolidario">
            <div class="row">
                <div class="col-md-12">
                    <div class="float-right">
                        <a href="{{route('aprobarcalificacionproducto',$item)}}"><span><i class="fas fa-check text-success icono"></i></span></a>
                        <a href="{{route('rechazarcalificacionproducto',$item)}}"><span><i class="fas fa-trash-alt text-danger icono"></i></span></a>
                    </div>
                    <h3>{{$item->correo}}</h3>
                <h4 class="textosolidario mr-3">{{$item->comentario}}</h4>
                    <br><br>
                    <a href="{{route('detalleprod',$item->producto_id)}}" class="float-right mr-3"><h4>Ver publicacion</h4></a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    </div>

    @foreach($comentariosservicios as $item)
    <div class="card my-3 border-3 publicacion">
        <div class="card-body cardsolidario">
            <div class="row">
                <div class="col-md-12">
                    <div class="float-right">
                        <a href="{{route('aprobarcalificacionservicio',$item)}}"><span><i class="fas fa-check text-success icono"></i></span></a>
                        <a href="{{route('rechazarcalificacionservicio',$item)}}"><span><i class="fas fa-trash-alt text-danger icono"></i></span></a>
                    </div>
                    <h3>{{$item->correo}}</h3>
                <h4 class="textosolidario mr-3">{{$item->comentario}}</h4>
                    <br><br>
                    <a href="{{route('detalleserv',$item->producto_id)}}" class="float-right mr-3"><h4>Ver publicacion</h4></a>
                </div>
            </div>
        </div>
    </div>
    @endforeach


   
    
</div>
@endsection