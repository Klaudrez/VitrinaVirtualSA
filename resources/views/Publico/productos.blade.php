@extends('plantilla')

@section('titulo', 'Productos')

@section('sidebar')
    @parent
@endsection

@section('contenido')
<br>
<hr>
<h1 class="text-center fondoicon">{{$namecategoria}}</h1>
<hr>
<br>
<div class="container">
  <div class="overflow-auto scroll2">
  @foreach($productos as $item)
    <div class="card my-3 border-0 fondobody">
      <div class="card-body fondo cardproducto">
        <div class="row">
          <div class="col-md-3">
          <img  @foreach($imgproductos as $img) @foreach($img as $imgaux) @if($imgaux->Producto_id==$item->id) src="/img/imgproductos/{{$imgaux->URL}}"@endif @endforeach @endforeach class="img-fluid imgsolidaridad" >
          </div>
          <div class="col-md-9 text-white">
            <br>
            <h2>{{$item->name}}</h2>
            <br><br><br>
          <a href="{{route('detalleprod',$item->id)}}" class=" text-white fondoredes">Ver más...</a>
            <h2 class="float-right">Precio: ${{$item->precio}}</h2>
          </div>
        </div>
      </div>
    </div>
    @endforeach

    @foreach($servicios as $item)
    <div class="card my-3 border-0 fondobody">
      <div class="card-body fondo cardproducto">
        <div class="row">
          <div class="col-md-3">
            <img  @foreach($imgservicios as $img) @foreach($img as $imgaux) @if($imgaux->Servicio_id==$item->id) src="/img/imgservicios/{{$imgaux->URL}}"@endif @endforeach @endforeach class="img-fluid imgsolidaridad" >
          </div>
          <div class="col-md-9 text-white">
            <br>
            <h2>{{$item->name}}</h2>
            <br><br><br>
            <a href="{{route('dserv',$item->id)}}" class=" text-white fondoredes">Ver más...</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection