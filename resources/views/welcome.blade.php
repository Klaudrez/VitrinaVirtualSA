<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('plantilla')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vitrina Virtual</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>

    @section('sidebar')
        @parent
    @endsection
     <!--CARRUSEL-->
     <div class="container-fluid pt-3 fondocarrusel">
       <div class="container pt-5 pb-4">
         <br>
      <!--Carousel Wrapper-->
      <div id="multi-item-example" class="carousel slide carousel-multi-item mt-2" data-ride="carousel">

        <!--Slides-->
        <div class="carousel-inner" role="listbox">
  
          <!--First slide-->
          <div class="carousel-item active">

            <div class="row">
              @foreach($productos as $item)
            <a href="{{route('detalleprod',$item->id)}}">
              <div class="col-md-4">
                <div class="card mb-2">
                  <img  @foreach($imgproductos as $img) @foreach($img as $imgaux) @if($imgaux->Producto_id==$item->id) src="/img/imgproductos/{{$imgaux->URL}}"@endif @endforeach @endforeach class="card-img-top">                  
                  <div class="card-title container-fluid fondoimagen">
                    <h5 class="text-center text-white my-2">&nbsp;{{$item->name}}</h5>
                  </div>
                </div>
              </div>
              </a>
              @endforeach

              
            </div>

          </div>
          <!--/.First slide-->
  
          <!--Second slide-->
          <div class="carousel-item">
  
            <div class="row">

              @foreach($servicios as $item)
            <a href="{{route('dserv',$item->id)}}">
              <div class="col-md-4">
                <div class="card mb-2">
                  <img  @foreach($imgservicios as $img) @foreach($img as $imgaux) @if($imgaux->Servicio_id==$item->id) src="/img/imgservicios/{{$imgaux->URL}}"@endif @endforeach @endforeach class="card-img-top" >
                  <div class="card-title container-fluid fondoimagen">
                    <h5 class="text-center text-white my-2">&nbsp;{{$item->name}}</h5>
                  </div>
                </div>
              </div>
              </a>
              @endforeach 

            </div>
  
          </div>
          <!--/.Second slide-->
  
          <!--Third slide-->
          <div class="carousel-item">
  
            <div class="row">

            
            @foreach($solidarios as $item)
            <a href="route('solidaria')">
              <div class="col-md-4">
                <div class="card mb-2">
                  <img  @foreach($imgsolidarios as $img) @foreach($img as $imgaux) @if($imgaux->Solidario_id==$item->id) src="/img/imgsolidario/{{$imgaux->URL}}"@endif @endforeach @endforeach class="card-img-top" >
                  <div class="card-title container-fluid fondoimagen">
                    <h5 class="text-center text-white my-2">&nbsp;{{$item->name}}</h5>
                  </div>
                </div>
              </div>
            </a>
            @endforeach
              
            </div>

          </div>
          <!--/.Third slide-->

          <!--Controls-->
          <div class="controls-top">
            <a class="btn-floating d-flex float-left text-white" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
            <a class="btn-floating d-flex justify-content-end float-right text-white" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
            <!--Indicators-->
            <ol class="carousel-indicators">
              <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
              <li data-target="#multi-item-example" data-slide-to="1"></li>
              <li data-target="#multi-item-example" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->

          </div>
          <!--/.Controls-->

        </div>
        <!--/.Slides-->

      </div>
      <!--/.Carousel Wrapper-->

    </div>
  </div>
    <!--/CARRUSEL-->

    @section('contenido')
     

      <!--CATEGORIAS-->
      <hr>
      <h1 class="text-center my-3 fondoicon"> CATEGORIAS</h1>
      <hr>
      <div class="container-fluid my-3">
      <br>

        <!--MODA: 1-->
        <div class="row my-3 border-right-0">
          <div class="col-md-5 pr-0 pl-0 ocultar-div ">
            <div class="card h-100 ">
              <div class="card-body border-right-0 text-justify">
               <a href="{{route('productoscategoria',1)}}" style="text-decoration:none"><h1 class="fondoicon ">Moda</h1></a>
                Aquí encontrarás las mejores tendencias en ropa.<br>Conoce nuestra categoria <b>MODA</b> y sorpréndete con la gran variedad de productos que tenemos para ti: jeans, vestidos cortos y largos, chaquetas, parkas, abrigos, ropa interior, accesorios y mucho más.
              </div>
            </div>
          </div>
          <div class="col-md-7 pl-0 pr-0">
            <div class="card border-0">
              <div class="card-img-top ">
                <a href="{{route('productoscategoria',1)}}"> <img src="img/img-cate/moda1.jpg" alt="" class="img-fluid border-left-0"></a>
              </div>
              <div class="card-title container-fluid fondoimagen justify-content-center"><h2 class="text-white text-center">Moda</h2></div>
            </div>
          </div>
        </div>
        <!--/MODA: 1 -->

        <!--BELLEZA:2 -->
        <div class="row my-3">
          <div class="col-md-7 pr-0 pl-0">
            <div class="card border-0">
              <div class="card-img-top">
                <a href="{{route('productoscategoria',2)}}"> <img src="img/img-cate/bellezaserv.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="card-title container-fluid fondoimagen"><h2 class="text-white text-center">Belleza</h2></div>
            </div>
          </div>
          <div class="col-md-5 pl-0 pr-0 ocultar-div">
            <div class="card h-100 ">
            <div class="card-body border-right-0 text-justify">
              <a href="{{route('productoscategoria',2)}}" style="text-decoration:none"><h1 class="fondoicon ">Belleza</h1></a>
              Aquí encontrarás todo lo necesario para los más pequeños del hogar. Navega en nuestro Marketplace infantil y sorpréndete con los cientos de productos que podras encontrar. 
              </div>
            </div>
          </div>
        </div>
        <!--/BELLEZA:2 -->

        <!--INFANTIL:3 -->
        <div class="row my-3">
          <div class="col-md-5 pl-0 pr-0 ocultar-div">
            <div class="card h-100 ">
            <div class="card-body border-right-0 text-justify">
              <a href="{{route('productoscategoria',3)}}" style="text-decoration:none"><h1 class="fondoicon ">Infantil</h1></a>
              Aquí encontrarás todo lo necesario para los más pequeños del hogar. Navega en nuestro Marketplace infantil y sorpréndete con los cientos de productos que podras encontrar. 
              </div>
            </div>
          </div>
          <div class="col-md-7 pr-0 pl-0">
            <div class="card border-0">
              <div class="card-img-top ">
                <a href="{{route('productoscategoria',3)}}"> <img src="img/img-cate/infantil1.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-title container-fluid fondoimagen"><h2 class="text-white text-center">Infantil</h2></div>
            </div>
          </div>
        </div>
        <!--/INFANTIL:3 -->
        
        <!--DECO:4 -->
        <div class="row my-3">
          <div class="col-md-7 pr-0 pl-0">
            <div class="card border-0">
              <div class="card-img-top">
                <a href="{{route('productoscategoria',4)}}"> <img src="img/img-cate/deco1.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-title container-fluid fondoimagen"><h2 class="text-white text-center">Hogar</h2></div>
            </div>
          </div>
          <div class="col-md-5 pl-0 pr-0 ocultar-div">
            <div class="card h-100 ">
            <div class="card-body border-right-0 text-justify">
              <a href="{{route('productoscategoria',4)}}" style="text-decoration:none"><h1 class="fondoicon ">Hogar</h1></a>
              Dale un estilo único a tu hogar con los cientos de productos que nuestros emprendedores te pueden ofrecer. Sorpréndete con lo mejor en Muebles, Hogar y Decoracion. 
             </div>
            </div>
          </div>
        </div>
        <!--/DECO:4 -->

        <!--GOURMET:5 -->
        <div class="row my-3">
          <div class="col-md-5 pr-0 pl-0 ocultar-div">
            <div class="card h-100 ">
            <div class="card-body border-right-0 text-justify">
              <a href="{{route('productoscategoria',5)}}" style="text-decoration:none"><h1 class="fondoicon ">Gastronomia</h1></a>
              Aquí encontrarás todo lo necesario para los más pequeños del hogar. Navega en nuestro Marketplace infantil y sorpréndete con los cientos de productos que podras encontrar. 
              </div>
            </div>
          </div>
          <div class="col-md-7 pl-0 pr-0">
            <div class="card border-0">
              <div class="card-img-top">
                <a href="{{route('productoscategoria',5)}}"> <img src="img/img-cate/gourmet1.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-title container-fluid fondoimagen"><h2 class="text-white text-center">Gastronomia</h2></div>
            </div>
          </div>
        </div>
        <!--GOURMET:5 -->


        <!--TECNO:6 -->
        <div class="row my-3">
          <div class="col-md-7 pl-0 pr-0">
            <div class="card border-0">
              <div class="card-img-top">
                <a href="{{route('productoscategoria',6)}}"> <img src="img/img-cate/tecnologia.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="card-title container-fluid fondoimagen"><h2 class="text-white text-center">Tecnología</h2></div>
            </div>
          </div>
          <div class="col-md-5 pr-0 pl-0 ocultar-div">
            <div class="card h-100 ">
            <div class="card-body border-right-0 text-justify">
              <a href="{{route('productoscategoria',6)}}" style="text-decoration:none"><h1 class="fondoicon ">Tecnología</h1></a>
              Aquí encontrarás todo lo necesario para los más pequeños del hogar. Navega en nuestro Marketplace infantil y sorpréndete con los cientos de productos que podras encontrar. 
              </div>
            </div>
          </div>
        </div>
        <!--/TECNO: 6 -->

        <!--MASCOTAS: 7 -->
        <div class="row my-3">
          <div class="col-md-5 pl-0 pr-0 ocultar-div">
            <div class="card h-100 ">
            <div class="card-body border-right-0 text-justify">
              <a href="{{route('productoscategoria',7)}}" style="text-decoration:none"><h1 class="fondoicon ">Mascotas</h1></a>
              Aquí encontrarás todo lo necesario para los más pequeños del hogar. Navega en nuestro Marketplace infantil y sorpréndete con los cientos de productos que podras encontrar. 
              </div>
            </div>
          </div>
          <div class="col-md-7 pl-0 pr-0">
            <div class="card border-0">
              <div class="card-img-top">
                <a href="{{route('productoscategoria',7)}}"> <img src="img/img-cate/mascotas1.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-title container-fluid fondoimagen"><h2 class="text-white text-center">Mascotas</h2></div>
            </div>
          </div>
        </div>
        <!--/MASCOTAS: 7 -->

        <!--LIBROS 8 -->
        <div class="row my-3">
          <div class="col-md-7 pr-0 pl-0">
            <div class="card border-0">
              <div class="card-img-top">
                <a href="{{route('productoscategoria',8)}}"> <img src="img/img-cate/libro.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-title  container-fluid fondoimagen "><h2 class="text-white text-center">Libros y Plantas</h2></div>
            </div>
          </div>
          <div class="col-md-5 pr-0 pl-0 ocultar-div">
            <div class="card h-100 ">
            <div class="card-body border-right-0 text-justify">
              <a href="{{route('productoscategoria',8)}}" style="text-decoration:none"><h1 class="fondoicon ">Libros y Plantas</h1></a>
              Aquí encontrarás todo lo necesario para los más pequeños del hogar. Navega en nuestro Marketplace infantil y sorpréndete con los cientos de productos que podras encontrar. 
              </div>
            </div>
          </div>
        </div>
        <!--/LIBROS:8 -->

        <!--REGALOS:9 -->
        <div class="row my-3">
          <div class="col-md-5 pl-0 pr-0 ocultar-div">
            <div class="card h-100 ">
            <div class="card-body border-right-0 text-justify">
              <a href="{{route('productoscategoria',9)}}" style="text-decoration:none"><h1 class="fondoicon ">Regalos</h1></a>
              Aquí encontrarás todo lo necesario para los más pequeños del hogar. Navega en nuestro Marketplace infantil y sorpréndete con los cientos de productos que podras encontrar. 
              </div>
            </div>
          </div>
          <div class="col-md-7 pl-0 pr-0">
            <div class="card border-0">
              <div class="card-img-top">
                <a href="{{route('productoscategoria',9)}}"> <img src="img/img-cate/regalos.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-title container-fluid fondoimagen"><h2 class="text-white text-center">Regalos</h2></div>
            </div>
          </div>
        </div>
        <!--/REGALOS: 9 -->

        <!--LIBROS 10 -->
        <div class="row my-3">
          <div class="col-md-7 pr-0 pl-0">
            <div class="card border-0">
              <div class="card-img-top">
                <a href="{{route('productoscategoria',10)}}"> <img src="img/img-cate/ocasion.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-title  container-fluid fondoimagen "><h2 class="text-white text-center">De Ocasión</h2></div>
            </div>
          </div>
          <div class="col-md-5 pr-0 pl-0 ocultar-div">
            <div class="card h-100 ">
            <div class="card-body border-right-0 text-justify">
              <a href="{{route('productoscategoria',10)}}" style="text-decoration:none"><h1 class="fondoicon ">De Ocasión</h1></a>
              Aquí encontrarás todo lo necesario para los más pequeños del hogar. Navega en nuestro Marketplace infantil y sorpréndete con los cientos de productos que podras encontrar. 
              </div>
            </div>
          </div>
        </div>
        <!--/LIBROS: 10 -->
      
        <!--SERVICIOS: 11 -->
        <div class="row my-3">
          <div class="col-md-5 pl-0 pr-0 ocultar-div">
            <div class="card h-100 ">
            <div class="card-body border-right-0 text-justify">
              <a href="productos" style="text-decoration:none"><h1 class="fondoicon ">Servicios</h1></a>
              Aquí encontrarás todo lo necesario para los más pequeños del hogar. Navega en nuestro Marketplace infantil y sorpréndete con los cientos de productos que podras encontrar. 
              </div>
            </div>
          </div>
          <div class="col-md-7 pr-0 pl-0">
            <div class="card border-0">
              <div class="card-img-top">
                <a href="productos"> <img src="img/img-cate/construccion1.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="card-title container-fluid fondoimagen"><h2 class="text-white text-center">Servicios</h2></div>
            </div>
          </div>
        </div>
        <!--/SERVICIOS: 11 -->

      </div>
      <!--/CATEGORIAS-->


      <!--CARD SOLIDARIO-->
      <div class="container">
        <div class="card my-3 border-0 fondobody">
          <div class="card-body fondo cardsolidario">
            <div class="row">
              <div class="col-md-9 text-white">
                <h3>Red Solidaria</h3>
                <h4 class="textosolidario">La solidaridad teje una red
                  entre todas las personas que
                  la practican y las hace
                  mucho más fuertes.
                  </h4>
                <br><br><br>
                <a class="nav-link text-white textosolidarioinfo" href="{{Route('solidaria')}}">Mas Informacion...</a>
              </div>
              <div class="col-md-3">
                <img src="img/solidaridad.jpg" alt="" class="img-fluid imgsolidaridad" >
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/CARD SOLIDARIO-->
    
    @endsection
  </body>
</html>