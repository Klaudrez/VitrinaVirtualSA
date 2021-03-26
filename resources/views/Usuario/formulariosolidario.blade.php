@extends('plantilla')

@section('titulo', 'Formulario')

@section('contenido')
<br><br><br>
<div class="modal-dialog text-center">
    <div class="col-sm-12">
        @if (session('mensaje'))

            <div class="alert alert-success">
                {{session('mensaje')}}
            </div>
        @endif
        <div class="modal-content my-2">
        <br>
            <div>
                <h4 class="my-2">Formulario Publicación de Servicio Solidario</h4>
            </div>
        <form method="POST" action="{{route('enviarSolidario')}}" class="col-12" enctype="multipart/form-data">
                @csrf
                <br>
                
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                    <input name='contacto' type="number" placeholder="Teléfono" class="form-control">
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-edit"></i></span>
                    </div>
                    <input name='name' type="text" placeholder="Nombre del aviso Solidario" class="form-control">
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-edit"></i></span>
                        
                    </div>
                    <textarea name='descripcion' id=""  placeholder="Descripcion" class="form-control"></textarea>
                </div>
                <div class="custom-file">
                  <input name='imgsol' type="file" class="custom-file-imput" id="customFileLang" lang="es">
                  <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                </div>
                <br><br>
                <button class="btn fondo-boton-contacto mb-3 text-white" type="submit"><i class="fas fa-paper-plane text-white"></i> Enviar</button>
            </form>
        </div>
    </div>  
</div>
@endsection