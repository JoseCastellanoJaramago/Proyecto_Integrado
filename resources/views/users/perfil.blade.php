@extends('layout')

@section('title', "Usuario {$user->id}")

@section('content')
    <div class="card">
        <h4 class="card bg-info text-white" align="center">DATOS DEL USUARIO {{ $user->id }}</h4>
        <div class="card-body bg-light">
            <h3 class="card bg-info text-white">Bienvenido {{ auth()->user()->name }} </h3>
            <p class="card bg-secondary text-white">Correo electrónico:</p><p class="card bg-light text-info"><b> {{ auth()->user()->email }}</b></p>
            @if( auth()->user()->clases_id == null)
                <p class="card bg-secondary text-white">Clase reservada: No tienes aún clase reservada</p>
            @else
                <p class="card bg-secondary text-white">Clase reservada:</p> <p class="card bg-light text-info"><b>{{ $clase->dia }} - {{ $clase->nombre }} - {{ $clase->horario }}</b></p>
            @endif
            <a class="btn btn-secondary text-white" href="{{ route('users.tablaEj') }}" ><b>Ver tabla ejercicios</b></a>
        </div>

    </div>
@endsection
