@extends('plantilla')

@section('titulo', 'Mensajes') 

@section('contenido')
<hr>
<h2 class="my-2 fondoicon">Mensajes : </h2>
<hr>

<div class="container my-3">
    <div class="container">
        @if(session('mensaje'))
            <div class="alert alert-danger">
                {{session('mensaje')}}
            </div>
        @endif
    </div>
    <div class="overflow-auto scroll2">
    @foreach($mensajes as $item) 
    <div class="card my-3 border-3 publicacion">
        <div class="card-body cardsolidario">
            <div class="row">
                <div class="col-md-12">
                    <div class="float-right">
                    <a href="{{route('eliminarmensaje',$item->id)}}"><span><i class="fas fa-trash-alt text-danger icono"></i></span></a>
                    </div>
                    <div class="row">
                        <h3>De: {{$item->name}} &nbsp; </h3>
                        <h3>{{$item->apellido}}</h3>
                    </div>
                    <div class="row">
                        <h5>&nbsp; &nbsp;Correo:&nbsp</h5>
                        <h5>{{$item->correo}}</h5>
                        <h5> &nbsp;/ Número: (+56) </h5>
                        <h5>{{$item->telefono}}</h5>
                    </div>
                    <hr>
                    <h4>Asunto: {{$item->asunto}}</h4>
                    <p>{{$item->mensaje}}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    </div>
</div>
@endsection