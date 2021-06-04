@extends('layout')

@section('title', "Ejercicio {$ejercicio->id}")

@section('content')
    <div class="card">
        <h4 class="card bg-info text-white">EJERCICIO {{ $ejercicio->id }}</h4>
        <div class="card-body bg-light">
            <p class="card bg-info text-white">Tipo de tabla: {{ $ejercicio->tipo }}</p>
            <p class="card bg-secondary text-white">Ejercicio 1: </p><p class="card bg-light text-info">{{ $ejercicio->ejercicio1 }}</p>
            <p class="card bg-secondary text-white">Ejercicio 2: </p><p class="card bg-light text-info">{{ $ejercicio->ejercicio2 }}</p>
            <p class="card bg-secondary text-white">Ejercicio 3: </p><p class="card bg-light text-info">{{ $ejercicio->ejercicio3 }}</p>
            <p class="card bg-secondary text-white">Ejercicio 4: </p><p class="card bg-light text-info">{{ $ejercicio->ejercicio4 }}</p>
            <p class="card bg-secondary text-white">Ejercicio 5: </p><p class="card bg-light text-info">{{ $ejercicio->ejercicio5 }}</p>
            <p class="card bg-secondary text-white">Ejercicio 6: </p><p class="card bg-light text-info">{{ $ejercicio->ejercicio6 }}</p>
            <p class="card bg-secondary text-white">Ejercicio 7: </p><p class="card bg-light text-info">{{ $ejercicio->ejercicio7 }}</p>
            <p class="card bg-secondary text-white">Ejercicio 8: </p><p class="card bg-light text-info">{{ $ejercicio->ejercicio8 }}</p>
            <a href="{{ route('ejercicios.index') }}" class="btn btn-link">Volver al listado de ejercicios</a>
        </div>
    </div>
@endsection




