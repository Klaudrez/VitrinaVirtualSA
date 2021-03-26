@extends('plantilla')

@section('titulo', 'Mi perfil')

@section('sidebar')
    @parent
@endsection

@section('contenido')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="text-center my-1 mt-2">Mis datos</h1>

                @if (session('mensaje'))
                    <div class="container">
                        <div class="alert alert-success">
                            <span><i class="fas fa-check"></i>&nbsp;{{session('mensaje')}}</span>
                        </div>
                    </div>              
                @endif
 
                <div class="card-body">
                     <form method="POST" action="{{ route('editarperfil',Auth::user()->id) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Contacto') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('contacto') is-invalid @enderror" name="contacto"  required autocomplete="contacto">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Actualizar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="float-right">
                        @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Cambiar Contraseña') }}
                                </a>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
