@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bt-info text-white">{{ __('Verifica tu dirección de email') }}</div>

                <div class="card-body bg-light">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado a tu correo un link de verificación') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, pincha sobre el link de verificación') }}
                    {{ __('Si no has recibido el email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('haz click aquí para recibir otro link') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
