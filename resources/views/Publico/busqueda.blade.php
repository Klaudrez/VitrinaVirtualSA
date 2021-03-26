@extends('plantilla')

@section('titulo', 'Resultados') 

@section('sidebar')
    @parent
@endsection

@section('contenido')
    <br>
    <hr>
    <div class="row">
        <div class="col-md-9">
            <h4 class="fondoicon">Resultados de busqueda: &nbsp;</h4>
                 <h4>{{$query}}</h4>       
        </div>
        <div class="col-md-3">
        </div>
    </div>
    <hr>
    <br>
    <div class="container">
        <div class="overflow-auto scroll2">
        @foreach($search as $item)
            
                <div class="card my-3 border-0 fondobody">
                    <div class="card-body fondo cardproducto">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/solidaridad.jpg" alt="" class="img-fluid imgsolidaridad" >
                            </div>
                            <div class="col-md-9 text-white">
                                <br>
                                    <h2>{{$item->name}}</h2>
                                <br><br><br>
                                <a class="text-white fondoredes" href="{{route('detalleprod',$item->id)}}"><h2>Ver publicación</h2></a>
                                <h2 class="float-right">Precio: ${{$item->precio}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                
            
        @endforeach

        @foreach($searchServicio as $item)
        
        <div class="card my-3 border-0 fondobody">
        <div class="card-body fondo cardproducto">
            <div class="row">
            <div class="col-md-3">
                <img src="img/solidaridad.jpg" alt="" class="img-fluid imgsolidaridad" >
            </div>
            <div class="col-md-9 text-white">
                <br>
                <h2>{{$item->name}}</h2>
                <br><br><br>
            <a class="text-white fondoredes" href="{{route('dserv',$item->id)}}"><h2>Ver publicación</h2></a>
            </div>
            </div>
        </div>
        </div>
        
        
        @endforeach

        </div>
    </div>
@endsection