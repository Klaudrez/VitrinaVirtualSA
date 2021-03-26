@extends('plantilla')

@section('titulo', 'Categorias') <!-- Nombre de página arriba -->

@section('sidebar')
    @parent
@endsection

@section('contenido')
    <br>
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
            <div class="card-title container-fluid fondoimagen"><h2 class="text-white text-center">Decoración</h2></div>
          </div>
        </div>
        <div class="col-md-5 pl-0 pr-0 ocultar-div">
          <div class="card h-100 ">
          <div class="card-body border-right-0 text-justify">
            <a href="{{route('productoscategoria',4)}}" style="text-decoration:none"><h1 class="fondoicon ">Decoración</h1></a>
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
@endsection