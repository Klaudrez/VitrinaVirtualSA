@extends('plantilla')

@section('titulo', 'Acerca de') <!-- Nombre de página arriba -->

@section('sidebar')
    @parent
@endsection

@section('contenido')
<br><br>
<hr>
    <h1 class="text-center my-3 fondoicon">¿Quienes somos?</h1>
 <hr>
 <div class="container h-25 mt-5 "  >
    <div class="ml-5 mr-5">
        <div class="ml-5 mr-5">
            <div class="ml-5 mr-5">
                <div class="text-justify ml-5 mr-5">
                    Vitrina Virtual es un portal dedicado a la difusión de ventas online. Nuestro objetivo es ofrecer los mejores productos/servicios a los mejores precios. 
                    Tenemos a su disposición una gran variedad de productos y servicios ofrecidos por la gente de San Antonio. <br>
                    Tenemos un equipo dedicado a satisfacer tus necesidades y que esta dispuesto a contestar tus dudas con la mejor atencion y brevedad posible. <br>
                    Para una mejor atención puedes contactarte con nosotros a través de nuestras redes sociales o mediante el contacto seleccionado en la barra superior del portal.
                </div>
            </div>  
        </div> 
    </div>
</div>
@endsection