@extends('plantilla')

@section('titulo', 'Contacto') <!-- Nombre de página arriba -->

@section('sidebar')
    @parent
@endsection

@section('contenido')
<br><br><br>
<div class="modal-dialog text-center">
    <div class="col-sm-12">
        <div class="modal-content">
            <div>
                <h4 class="my-2">Contáctese con nosotros</h4>
                @if (session('mensaje'))
                <br>
                <div class="container">
                    <div class="alert alert-success">
                        {{session('mensaje')}}
                    </div>
                </div>           
             @endif
            </div>
            <form method="POST" action="{{route('sendmensaje')}}" class="col-12">
                @csrf
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input name="name" type="text" placeholder="Nombre" class="form-control">
                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input name="apellido" type="text" placeholder="Apellido" class="form-control">
                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input name="correo" type="email" placeholder="Correo electrónico" class="form-control">
                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                    <input name="telefono" type="text" placeholder="Teléfono" class="form-control">
                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-edit"></i></span>
                    </div>
                    <input name="asunto" type="text" placeholder="Asunto" class="form-control">
                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-edit"></i></span>
                        
                    </div>
                    <textarea name="mensaje" id=""  placeholder="Mensaje" class="form-control"></textarea>
                </div>

                <button class="btn fondo-boton-contacto mb-3 text-white" type="submit"><i class="fas fa-paper-plane text-white"></i> Enviar</button>
            </form>
        </div>
    </div>

        
</div>
@endsection