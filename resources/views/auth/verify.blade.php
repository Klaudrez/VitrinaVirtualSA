@extends('plantilla')

@section('titulo', 'Verificacion') <!-- Nombre de página arriba -->

@section('sidebar')
    @parent
@endsection

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un link de verificación se ha envió a tu correo recientemente.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, consulte su correo electrónico y revise si hay un enlace de verificación.') }}
                    {{ __('si no has recibido el email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Click aquí para enviar otro enlace de verificación') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
