@extends('layout')

@section('title', "Entrenador {$user->id}")

@section('content')
    <div class="card">
        <h4 class="card bg-info text-white" align="center">DATOS DEL ENTRENADOR {{ $user->id }}</h4>
        <div class="card-body bg-light">
            <h3 class="card bg-info text-white">Bienvenido {{ auth()->user()->name }} </h3>
            <p class="card bg-secondary text-white">Correo electrónico:</p> <p class="card bg-light text-info"><b>{{ auth()->user()->email }}</b></p>
            <p class="card bg-secondary text-white">Clase:</p> <p class="card bg-light text-info"><b>{{ $clases->nombre }}</b></p>
            <p class="card bg-secondary text-white">Horario:</p> <p class="card bg-light text-info"><b>{{ $clases->horario }}</b></p>
            <p class="card bg-secondary text-white">Día de la semana:</p> <p class="card bg-light text-info"><b>{{ $clases->dia }}</b></p>
            <p class="card bg-secondary text-white">Plazas:</p> <p class="card bg-light text-info"><b>{{ $clases->plazas }}</b></p>
        </div>
    </div>
@endsection
