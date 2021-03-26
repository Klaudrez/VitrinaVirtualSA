@extends('plantilla')

@section('titulo', 'Red Solidaria')

@section('sidebar')
    @parent
@endsection

@section('contenido')
<br>
<hr>
<h1 class="text-center fondoicon">Red Solidaria</h1>
<hr>
<br>
<div class="container">
  <div class="overflow-auto scroll2">
  @foreach($solidarios as $item)
    <div class="card my-3 border-0 fondobody">
      <div class="card-body fondo cardproducto">
        <div class="row">
          <div class="col-md-3">
            <img  @foreach($imgsolidario as $img) @foreach($img as $imgaux) @if($imgaux->Solidario_id==$item->id) src="/img/imgsolidario/{{$imgaux->URL}}"@endif @endforeach @endforeach class="d-block img-fluid" >
          </div>
          <div class="col-md-9 text-white">
            <br>
            <h2>{{$item->name}}</h2>
            <h5>{{$item->descripcion}}</h5> 
            <br>
          </div>
        </div>
      </div>
    </div>
   @endforeach
  </div>
</div>
@endsection