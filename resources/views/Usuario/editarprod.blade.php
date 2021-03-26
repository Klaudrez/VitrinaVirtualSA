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
                            <img class="d-block img-fluid" src="https://s19.postimg.cc/qzj5uncgj/slide1.jpg" alt="">
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
                <h1 class="text-center">Mascarillas</h1>
                <div class="text-justify mt-2">
                Forradas en lycra polyamyda elastano una tela antitranspirante y antibacterial de secado rápido. Y por fuera son de Sofía,  Sofia asi se llama la tela porosa opaca y las otras son de látex por fuera  Pasan la prueba del spray.
                estamos ubicados en Av.Alguna avenida #3722 en el 4to piso del edificio B en la habitacion 453 pero podemos mandar a domicilio tu pedido
                </div>
                <div class="row">
                    <form method="get" action="/formeditarprod">
                    <button class="btn boton mb-3 text-white mt-2" type="submit"><i class="fas fa-edit text-white"></i> Editar</button>
                    </form>
    
                <a href="contacto"><button class="btn destacado mb-3 text-dark mt-2 ml-3"><i class="fas fa-edit text-dark"></i>Destacar</button></a>
        
                </div>
                <h2 class="float-right">Precio $9999</h2>
            </div>
            <!-- / Lado derecho -->
        </div>
        <br>
        <hr>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div>
                    <h4 class="text-sm-left">Datos del Vendedor: </h4>
                    <br>
                    <div class="row">
                    <p class="text-sm-left ml-5">Contacto:</p>
                    <p class="text-sm-left ml-3"> (+56) 9 4410 1329 - contacto@laabuelapets.cl</p>
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
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection