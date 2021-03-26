@extends('plantilla')

@section('titulo', 'Servicio') <!-- Nombre de página arriba -->

@section('sidebar')
    @parent
@endsection
<div class="container-fluid fondocarrusel">
    <div class="container pt-4 pb-4"></div>
        <div class="container cont">
            <div class="row my-5 ">
                <div class="col-md-5 pr-0 pl-0 ml-2">
                    <p class="h1 text-white text-justify">{{$servicio->name}}</p>
                <p class="h5 text-white text-justify">{{$servicio->subname}}</p>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                        <div class="card-img-top ">
                            <img @foreach($imgservicio as $item)src="/img/imgservicios/{{$item->URL}}"@endforeach alt="" class="responsive" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('contenido')

<hr>
<div class="row my-3">
          <div class="col-md-5 pr-0 pl-0 mr-2 ocultar-div">
          <h1 class="text-justify my-3 fondoicon">Sobre Nosotros</h1>
            <div class="border-right-0 text-justify fondobody">
            {{$servicio->descripcion}}
            </div>
          </div>
          <div class="col-md-6 pl-0 pr-0 ml-5">
            <div class="card border-0">
            <div class="container fondobody">
		<div class="carousel slide" id="main-carousel" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#main-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#main-carousel" data-slide-to="1"></li>
				<li data-target="#main-carousel" data-slide-to="2"></li>
				<li data-target="#main-carousel" data-slide-to="3"></li>
			</ol><!-- /.carousel-indicators -->
			
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block img-fluid" @foreach($imgservicio as $item)src="/img/imgservicios/{{$item->URL}}"@endforeach alt="">
					<div class="carousel-caption d-none d-md-block">
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block img-fluid" src="https://s19.postimg.cc/lmubh3h0j/slide2.jpg" alt="">
					<div class="carousel-caption d-none d-md-block">
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block img-fluid" src="https://s19.postimg.cc/99hh9lr5v/slide3.jpg" alt="">
					<div class="carousel-caption d-none d-md-block">
					</div>
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
		</div><!-- /.carousel -->
	</div><!-- /.container -->
    </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-6">
        <h4 class="text-justify my-3 fondoicon">Redes Sociales</h4> 
        <div class="d-flex bd-highlight">
            <div class="p-2 bd-highlight ml-5"><a class="fondoredesinfo"  @foreach($rrss as $item)href="{{$item->facebook}}"@endforeach><p><span><i class="fab fa-facebook-square" style="font-size: 37px;"></i></span>&nbsp;</div></p></a>
            <div class="p-2 bd-highlight ml-5 "><a class="fondoredesinfo" @foreach($rrss as $item)href="{{$item->Instagram}}"@endforeach><p></span><i class="fab fa-twitter" style="font-size: 37px;"></i></span>&nbsp;</div></p></a>
            <div class="p-2 bd-highlight ml-5"><a class="fondoredesinfo" @foreach($rrss as $item)href="{{$item->Twitter}}"@endforeach><p><span><i class="fab fa-instagram" style="font-size:37px;"></i></span></p></div></a>
        </div>
    </div>
    <div class="col-md-6 pl-0 pr-0 fondobody">
        <div class="border-right-0 text-justify fondobody">
            <h4 class="text-center fondoicon">Contacto </h4>
            <br>
            <div class="ml-5"><p class="text-sm-left ml-5">Contacto:</p></div>
        <div class="ml-5"><p class="text-sm-left ml-5"> (+56) {{$servicio->contacto}} - @foreach($email as $item){{$item->email}}@endforeach</p></div>
            <div class="ml-5"><p class="text-sm-left ml-5">Horario:</p></div>
            <div class="ml-5"><p class="text-sm-left ml-5">Lunes a Domingo de 08:00 a 20:00 hrs</p></div>

        </div>             
    </div>
</div>
<hr>
<h4 class="fondoicon">Comentarios:</h4>
<div class="overflow-auto scroll1">
    @foreach($calificaciones as $item)

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
<hr>

<div><h4 class="my-2 fondoicon">Deja tu comentario:</h4></div>
<form method="POST" action="{{route('sendcomentarioservicio',$servicio->id)}}">
    @csrf
    <div class="float-right row">
        <p class="clasificacion">
            <input id="radio1" type="radio" name="puntuacion" value="5">
            <label class="estrella" for="radio1">&nbsp; ★</label>
            <input id="radio2" type="radio" name="puntuacion" value="4">
            <label class="estrella" for="radio2">★</label>
            <input id="radio3" type="radio" name="puntuacion" value="3">
            <label class="estrella" for="radio3">★</label>
            <input id="radio4" type="radio" name="puntuacion" value="2">
            <label class="estrella" for="radio4">★</label>
            <input id="radio5" type="radio" name="puntuacion" value="1">
            <label class="estrella" for="radio5">★</label>
        </p>
    </div>
    @if(session('mensaje'))
        <div class="alert alert-success float-left">
            {{session('mensaje')}}
        </div>
    @endif
    <div class="input-group form-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
        </div>
        <input name="correo" type="email" placeholder="Correo electrónico" class="form-control">
    </div>
    <div class="input-group form-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-edit"></i></span>
        </div>
        <textarea name="comentario" id=""  placeholder="Mensaje" class="form-control"></textarea>
    </div>
    <button class="btn boton mb-3 text-white float-right" type="submit"><i class="fas fa-paper-plane text-white"></i> Enviar</button>
</form>
<br>

@endsection