<html>
  <head>
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <script src="https://kit.fontawesome.com/a35944550c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>@yield('titulo')</title>
  </head>
  <body class="fondobody">
    @section('sidebar')
    <!--NAVBAR-->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light fondo">

      <!--MENU LATERAL-->
      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="menu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span> <i class="fas fa-bars"></i> </span>
        </a>
        <div class="dropdown-menu " id="menulat" aria-labelledby="menu">
          <a class="dropdown-item font-weight-bold">Categorias</a>
          <a class="dropdown-item" href="{{route('productoscategoria',1)}}"><span><i class="fas fa-tshirt"></i></span>&nbsp; Moda</a>
          <a class="dropdown-item" href="{{route('productoscategoria',2)}}"><span><i class="fas fa-spa"></i></span> &nbsp;Belleza</a>
          <a class="dropdown-item" href="{{route('productoscategoria',3)}}"><span><i class="fas fa-child"></i></span>&nbsp;&nbsp; Infantil</a>
          <a class="dropdown-item" href="{{route('productoscategoria',4)}}"><span><i class="fas fa-couch"></i></span> Hogar</a>
          <a class="dropdown-item" href="{{route('productoscategoria',5)}}"><span><i class="fas fa-utensils"></i></span> &nbsp;&nbsp;Gastronomia</a>
          <a class="dropdown-item" href="{{route('productoscategoria',6)}}"><span><i class="fas fa-laptop"></i></span> Tecnología</a>
          <a class="dropdown-item" href="{{route('productoscategoria',7)}}"><span><i class="fas fa-dog"></i></span> Mascotas</a>
          <a class="dropdown-item" href="{{route('productoscategoria',8)}}"><span><i class="fas fa-book"></i></span> &nbsp;Libros y Plantas</a>
          <a class="dropdown-item" href="{{route('productoscategoria',9)}}"><span><i class="fas fa-gifts"></i></span> Regalos</a>
          <a class="dropdown-item" href="{{route('productoscategoria',10)}}"><span><i class="far fa-grin"></i></span> &nbsp;De Ocasión</a>
          <a class="dropdown-item" href="{{route('productoscategoria',11)}}"><span><i class="fas fa-truck-loading"></i></span> Servicios</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item font-weight-bold" href="{{Route('solidaria')}}"><span><i class="fas fa-hand-holding-heart"></i></span> Red Solidaria</a>
        </div>
      </div>
      <!--/MENU LATERAL-->

      <!--NOMBRE-->
      <a class="navbar-brand text-white" href="{{Route('main')}}"> <span><i class="fas fa-shopping-bag"></i> </span>Vitrina Virtual</a>
      <!--/NOMBRE-->

      <!--BUSCADOR-->
      <button class="navbar-toggler btn boton text-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span> <i class="fas fa-search"></i> </span>
      </button>
    <form method="POST" action="{{route('buscarprincipal')}}" class="form-inline my-2 my-lg-0 ml-5 collapse navbar-collapse"  id="navbarSupportedContent">
      @csrf
        <input class="form-control mr-sm-2 rounded-pill"  placeholder="Buscar"  name="search">
        <button class="btn boton text-white my-2 my-sm-0" type="submit">Buscar</button>
      </form>
      <!--/BUSCADOR-->

      <!--OPCIONES NAVBAR-->
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav ml-md-auto d-none d-md-flex">
          @yield('admin')
          @show
          <li class="nav-item active">
            <a class="nav-link text-white" href="{{Route('catp')}}">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{Route('acerca')}}">Acerca de</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{Route('contacto')}}">Contacto</a>
          </li>
        </ul>
      </div>
      <!--/OPCIONES NAVBAR-->
      

      <!--MENU CONTROL DE USUARIOS-->
     
      @if (Auth::guard('web')->check())
        <div class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{Auth::guard('web')->user()->name}} <span class="caret"></span>
          </a>
          <div id="menulatder" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item font-weight-bold" href="{{ route('perfil') }}">Perfil</a>
            <a class="dropdown-item font-weight-bold" href="{{ route('formularioprod') }}">Publicar Producto</a>
            <a class="dropdown-item font-weight-bold" href="{{ route('formularioserv') }}">Publicar Servicio</a>
            <a class="dropdown-item font-weight-bold" href="{{ route('formulariosolidario') }}">Publicar Aviso Solidario</a>
            <a class="dropdown-item font-weight-bold" href="{{ route('misproductos') }}">Mis Productos</a>
            <a class="dropdown-item font-weight-bold" href="{{ route('misserv') }}">Mis Servicios</a>
            <a class="dropdown-item font-weight-bold" href="{{ route('missolidarios') }}">Mis Publicaciones Solidarios</a>
            <a class="dropdown-item font-weight-bold" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Salir') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
              </form>
            </div>
        </div>
      @else
          @if (Auth::guard('admin')->check())
            <div class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{Auth::guard('admin')->user()->name}} <span class="caret"></span>
              </a>
              <div id="menulatder" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item font-weight-bold" href="{{ route('mensajes') }}">Bandeja de entrada</a>
                <a class="dropdown-item font-weight-bold" href="{{ route('validarpublicaciones')}}">Validar Publicaciones</a>
                <a class="dropdown-item font-weight-bold" href="{{ route('comentariosProductos') }}">Validar Comentarios</a>
                <a class="dropdown-item font-weight-bold" href="{{ route('adddestacar') }}">Agregar Destacados</a>
                <a class="dropdown-item font-weight-bold" href="{{ route('destacar') }}">Administrar Destacados</a>
                <a class="dropdown-item font-weight-bold" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Salir') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                  </form>
                </div>
            </div>
          @else
            <div class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="login" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span><i class="fas fa-user-circle"></i></span>
              </a>
              <div id="menulatder" class="dropdown-menu dropdown-menu-right" aria-labelledby="login">
                <a class="dropdown-item font-weight-bold" href="{{ route('login') }}">Ingresar</a>
                @if (Route::has('register'))
                  <a class="dropdown-item font-weight-bold" href="{{ route('register') }}">Registrar</a>
                @endif
              </div>
            </div> 
          @endif
      @endif
      <!--/MENU CONTROL DE USUARIOS-->

    </nav>
    <!--/NAVBAR-->

    @show
    <!--CONTENIDO-->
    <div class="container">
      <div class="container-fluid py-5">
        @yield('contenido')
      </div>
    </div>
    <!--/CONTENIDO-->
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  </body>

  <br><br>
  <!--FOOTER-->
  <footer class="navbar-fixed-bottom font-small text-light">

    <div class="d-flex bd-highlight fondo">
      <div class="p-2 flex-grow-1 bd-highlight mt-1">Powered by Los Covid Bryant &copy</div>
      @guest
        <a class="float-right mt-2 mr-5 fondoredes" href="{{ route('admin.login') }}" style="text-decoration:none"> Ingresar Admin</a>
      @endguest
      <div class="p-2 bd-highlight"><a class="fondoredes" href="https://facebook.com"><p><span><i class="fab fa-facebook-square" style="font-size: 37px;"></i></span>&nbsp;</div></p></a>
      <div class="p-2 bd-highlight"><a class="fondoredes" href="https://twitter.com"><p></span><i class="fab fa-twitter" style="font-size: 37px;"></i></span>&nbsp;</div></p></a>
      <div class="p-2 bd-highlight"><a class="fondoredes" href="https://instagram.com"><p><span><i class="fab fa-instagram" style="font-size:37px;"></i></span></p></div></a>
    </div>

  </footer>
  <!--/FOOTER-->

</html>
