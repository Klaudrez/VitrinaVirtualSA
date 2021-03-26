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
                    <p class="h1 text-white text-justify">La Abuela PETS</p>
                    <p class="h5 text-white text-justify">Hotel para Mascotas</p>
                    <form>
                        <p class="clasificacion">
                            <input id="radio1" type="radio" name="puntuacion" value="5"><!--
                            --><label class="estrella2" for="radio1">&nbsp; ★</label><!--
                            --><input id="radio2" type="radio" name="puntuacion" value="4"><!--
                            --><label class="estrella2" for="radio2">★</label><!--
                            --><input id="radio3" type="radio" name="puntuacion" value="3"><!--
                            --><label class="estrella2" for="radio3">★</label><!--
                            --><input id="radio4" type="radio" name="puntuacion" value="2"><!--
                            --><label class="estrella2" for="radio4">★</label><!--
                            --><input id="radio5" type="radio" name="puntuacion" value="1"><!--
                            --><label class="estrella2" for="radio5">★</label>
                        </p>
                    </form>
                    <div class="row">
<!-- formeditarserv --> <form method="get" action="/formeditarserv">
                        <button class="btn destacado mb-3 text-dark mt-2" type="submit"><i class="fas fa-edit text-dark"></i> Editar</button>
                    </form>
<!-- BOTON DESTACAR --> <a href="contacto"><button class="btn destacado mb-3 text-dark mt-2 ml-3"><i class="fas fa-edit text-dark"></i>Destacar</button></a>
                    </div>
                </div>
                <div class="col-md-6 pl-2 pr-2 ml-5">
                    <div class="card border-0">
                        <div class="card-img-top ">
                            <img src="img/img-cate/moda1.jpg" alt="" class="img-fluid border-left-0 rbordes">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('contenido')


<div class="row my-3">
          <div class="col-md-5 pr-0 pl-0 mr-2 ocultar-div">
          <h1 class="text-justify my-3 fondoicon">Sobre Nosotros</h1>
            <div class="border-right-0 text-justify fondobody">
            Te contamos sobre nosotros! Nuestra idea fue creciendo y concretándose a través del tiempo, cuando por casualidades de la vida hemos tenido la necesidad de viajar o trasladarnos con nuestras mascotas.
            Entregamos una gran variedad de servicios personalizados y disponemos de un entorno diferente donde tu mascota puede disfrutar libremente y jugar bajo el cuidado permanente de nuestro personal.
            Nuestras instalaciones han sido especialmente acondicionadas para asegurar el confort y la seguridad de nuestras mascotas!
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
					<img class="d-block img-fluid" src="https://s19.postimg.cc/qzj5uncgj/slide1.jpg" alt="">
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
    <h4 class="text-justify my-3 fondoicon">Redes Sociales</h4> 
    <div class="d-flex bd-highlight">
        <div class="p-2 bd-highlight ml-5"><a class="fondoredesinfo"  href="https://facebook.com"><p><span><i class="fab fa-facebook-square" style="font-size: 37px;"></i></span>&nbsp;</div></p></a>
        <div class="p-2 bd-highlight ml-5 "><a class="fondoredesinfo" href="https://twitter.com"><p></span><i class="fab fa-twitter" style="font-size: 37px;"></i></span>&nbsp;</div></p></a>
        <div class="p-2 bd-highlight ml-5"><a class="fondoredesinfo" href="https://instagram.com"><p><span><i class="fab fa-instagram" style="font-size:37px;"></i></span></p></div></a>
    </div>

    <div class="container-fluid my-3">
        <br>
        <div class="row my-3">
            <div class="col-md-3"></div>
            <div class="col-md-6 pl-0 pr-0 fondobody">
                <div class="border-right-0 text-justify fondobody">
                    <h4 class="text-center fondoicon">Contacto</h4>
                    <br>
                    <div class="ml-5"><p class="text-sm-left ml-5">Contacto:</p></div>
                    <div class="ml-5"><p class="text-sm-left ml-5"> (+56) 9 4410 1329 - contacto@laabuelapets.cl</p></div>
                    <div class="ml-5"><p class="text-sm-left ml-5">Horario:</p></div>
                    <div class="ml-5"><p class="text-sm-left ml-5">Lunes a Domingo de 08:00 a 20:00 hrs</p></div>           
                </div>
            </div>
        </div>
    </div>
@endsection