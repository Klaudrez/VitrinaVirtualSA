@extends('plantilla')

@section('titulo', 'Producto') <!-- Nombre de página arriba -->

@section('sidebar')
    @parent
@endsection

@section('contenido')
<br><br><br><br>
    <div class="container-fluid">
        
        <div class="row">
                <!-- Lado izquierdo -->
            <div class="col-md-6">
                <div class="carousel slide" id="main-carousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#main-carousel" data-slide-to="1"></li>
                        <li data-target="#main-carousel" data-slide-to="2"></li>
                        <li data-target="#main-carousel" data-slide-to="3"></li>
                    </ol><!-- /.carousel-indicators -->
                    
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block img-fluid" @foreach($imgproducto as $img)src="/img/imgproductos/{{$img->URL}}@endforeach" alt="">
                            <div class="carousel-caption d-none d-md-block"></div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://s19.postimg.cc/nenabzsnn/slide4.jpg" alt="" class="d-block img-fluid">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                    </div><!-- /.carousel-inner -->
                    
                    <a href="#main-carousel" class="carousel-control-prev" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="sr-only" aria-hidden="true">Prev</span>
                    </a>
                    <a href="#main-carousel" class="carousel-control-next" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="sr-only" aria-hidden="true">Next</span>
                    </a>
                </div>
                <!-- /Carrusel -->
            </div>
            <!-- / Lado izquierdo -->
            
            <!-- Lado derecho -->
            <div class="col-md-6">
                <h1 class="text-center">{{$producto->name}}</h1>
                <div class="text-justify mt-2">
                {{$producto->descripcion}}
                </div>
                <h2 class="float-right">Precio: $ {{$producto->precio}}</h2>
            </div>
            <!-- / Lado derecho -->
        </div>
        <br>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <h4>Comentarios:</h4>
                <div class="overflow-auto scroll1">
                    @foreach($calificacionesproducto as $item)
                    <div class="card my-3 border-3 mr-2">
                        <div class="card-body">
                            <div class="col-md-12">
                                <h3>{{$item->correo}}</h3>
                                <h4 class="mr-3">{{$item->comentario}}</h4>
                            </div>
                        </div>
                    </div>
                    @endforeach 
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <h4 class="text-sm-left">Datos del Vendedor: </h4>
                    <br>
                    <div class="row">
                    <p class="text-sm-left ml-5">Contacto:</p>
                    <p class="text-sm-left ml-3">(+56) {{$producto->contacto}} - @foreach($email as $item){{$item->email}} @endforeach</p>
                    </div>
                </div> 
                <h4 class="text-sm-left my-3">Redes Sociales:</h4>
                <div class="row my-3">
                    <div class="d-flex bd-highlight">
                        <div class="p-2 bd-highlight ml-5"><a class="fondoredes"  href="https://facebook.com"><p><span><i class="fab fa-facebook-square" style="font-size: 37px;"></i></span>&nbsp;</div></p></a>
                        <div class="p-2 bd-highlight ml-5"><a class="fondoredes" href="https://twitter.com"><p></span><i class="fab fa-twitter" style="font-size: 37px;"></i></span>&nbsp;</div></p></a>
                        <div class="p-2 bd-highlight ml-5"><a class="fondoredes" href="https://instagram.com"><p><span><i class="fab fa-instagram" style="font-size:37px;"></i></span></p></div></a>
                    </div> 
                </div>
            </div>
        </div>
        <hr>
        <form method="POST" action="{{route('subircomentarioproducto',$producto->id)}}" class="col-12 my-3">
            @csrf
            <h4>Deja tu comentario:</h4>
            <div class="float-right row">
                <h4>Puntuacion: &nbsp;</h4>
                <p class="clasificacion">
                    <input id="radio1" type="radio" name="puntuacion" value="5"><!--
                    --><label class="estrella" for="radio1">&nbsp; ★</label><!--
                    --><input id="radio2" type="radio" name="puntuacion" value="4"><!--
                    --><label class="estrella" for="radio2">★</label><!--
                    --><input id="radio3" type="radio" name="puntuacion" value="3"><!--
                    --><label class="estrella" for="radio3">★</label><!--
                    --><input id="radio4" type="radio" name="puntuacion" value="2"><!--
                    --><label class="estrella" for="radio4">★</label><!--
                    --><input id="radio5" type="radio" name="puntuacion" value="1"><!--
                    --><label class="estrella" for="radio5">★</label>
                </p>
            </div>
            @if(session('mensaje'))
                    <div class="alert alert-success float-left">
                        {{session('mensaje')}}
                    </div>
                @endif
            <div class="input-group form-group mt-0">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" placeholder="Correo electrónico" class="form-control" name="correo">
            </div>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-edit"></i></span>
                </div>
                <textarea name="comentario" id=""  placeholder="Mensaje" class="form-control"></textarea>
            </div>
            <button class="btn boton mb-3 text-white float-right mt-1" type="submit"><i class="fas fa-paper-plane text-white"></i> Enviar</button>
        </form>
        <br>
    </div>
@endsection