@extends('plantilla')

@section('titulo', 'Formulario')

@section('contenido')
<br><br><br>
<div class="modal-dialog text-center">
    <div class="col-sm-12">
        <div class="modal-content my-2">
        <br>
            <div>
                <h4 class="my-2">Editar Producto</h4>
            </div>
        <form method="POST"action="{{route('editarprod',$producto->id)}}" class="col-12">
                
                @csrf
                <br>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
                    </div>
                <input name='facebook' type="url" placeholder="Facebook" class="form-control" @foreach($rrss as $item)value="{{$item->facebook}}"@endforeach>
                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                    </div>
                <input name='Instagram' type="url" placeholder="Instagram" class="form-control" @foreach($rrss as $item) value="{{$item->Instagram}}"@endforeach>
                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                    </div>
                <input name='Twitter' type="url" placeholder="Twitter" class="form-control" @foreach($rrss as $item)value="{{$item->Twitter}}"@endforeach>
                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                <input name='contacto' type="number" placeholder="Teléfono" class="form-control" value="{{$producto->contacto}}">
                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-edit"></i></span>
                    </div>
                <input name='name' type="text" placeholder="" class="form-control" value="{{$producto->name}}">
                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-edit"></i></span>
                        
                    </div>
                <textarea name="descripcion" id=""  placeholder="{{$producto->descripcion}}" class="form-control" value=""></textarea>
                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-money-bill-wave"></i></span>
                    </div>
                <input name='precio' type="number" placeholder="Precio" class="form-control" value="{{$producto->precio}}"> 
                </div>

                <select name='categoria_id' class="custom-select">
                    <option selected>Seleccione una categoria:</option>
                    <option value="1">Moda</option>
                    <option value="2">Belleza</option>
                    <option value="3">Infantil</option>
                    <option value="4">Decoración</option>
                    <option value="5">Gastronomia</option>
                    <option value="6">Tecnología</option>
                    <option value="7">Mascotas</option>
                    <option value="8">Libros y Plantas</option>
                    <option value="9">Regalos</option>
                    <option value="10">De Ocasión</option>
                    <option value="11">Servicios</option>
                </select>
                <br>
                <br>
                <div class="custom-file">
                  <input name='imgprod' type="file" class="custom-file-imput" id="customFileLang" lang="es">
                  <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                </div>
                <br><br><br>
                <button class="btn fondo-boton-contacto mb-3 text-white" type="submit"><i class="fas fa-paper-plane text-white"></i> Guardar</button>
            </form>
        </div>
    </div> 
</div>
@endsection