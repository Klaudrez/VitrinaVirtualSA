@extends('plantilla')

@section('titulo', 'Destacar') 

@section('sidebar')
    @parent
@endsection

@section('contenido')
    <br>
    <h3>Realice busqueda:</h3>
    <div class="row">
        <div class="col-md-2"></div>
        <form class="my-2 my-lg-0 ml-5 form-inline col-md-8">
            @csrf
            <div class="row">
                <input class="form-control mr-sm-2 rounded-pill form-inline"  placeholder="Buscar"  name="search">
                <button class="btn boton text-white my-2 my-sm-0" type="submit">Buscar</button>
            </div>

            <div class="col-md-2 ml-5">
                <select name='categoria_id' class="custom-select">
                    <option selected>Seleccione una categoria:</option>
                    <option value="1">Moda</option>
                    <option value="2">Belleza</option>
                    <option value="3">Infantil</option>
                    <option value="4">Decoracion</option>
                    <option value="5">Gastronomia</option>
                    <option value="6">Tecnología</option>
                    <option value="7">Mascotas</option>
                    <option value="8">Libros y Plantas</option>
                    <option value="9">Regalos</option>
                    <option value="10">De Ocasión</option>
                    <option value="11">Servicios</option>
                </select>
            </div>
        </form>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-9">
            <h4 class="fondoicon">Resultados de busqueda: &nbsp;</h4>
            <h4>Aqui poner lo que busque</h4>
        </div>
        @if(session('mensaje'))
                <div class="alert alert-success float-left">
                    {{session('mensaje')}}
                </div>
            @endif
    </div>
    <hr>
    <br>
    
    <div class="container">  
        <div class="overflow-auto scroll2">
        @foreach($productos as $item)
        <div class="card my-5 border-0 fondobody" style="height: 256px;">
            <div class="card-body fondo cardproducto">
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/solidaridad.jpg" alt="" class="img-fluid imgsolidaridad" >
                    </div>
                    <div class="col-md-9 text-white">
                        <br>
                    <a href="{{route('destacarproducto',$item->id)}}"><button class="btn btn-secondary float-right mr-3">Destacar</button></a>
                        <h2>{{$item->name}}</h2>
                        <br><br><br>
                        
                    <h2 class="float-right">Precio: {{$item->precio}}</h2>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        @foreach($servicios as $item)
        <div class="card my-5 border-0 fondobody" style="height: 256px;">
            <div class="card-body fondo cardproducto">
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/solidaridad.jpg" alt="" class="img-fluid imgsolidaridad" >
                    </div>
                    <div class="col-md-9 text-white">
                        <br>
                    <a href="{{route('destacarServicio',$item->id)}}"><button class="btn btn-secondary float-right mr-3">Destacar</button></a>
                        <h2>{{$item->name}}</h2>
                        <br><br><br>
                        
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
@endsection