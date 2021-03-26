<!--D@extends('layouts.app')-->
@extends('plantilla')


@section('contenido')
<br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido a Vitrina Virtual') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Iniciaste Sesión!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
