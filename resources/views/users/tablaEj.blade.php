@extends('layout')

@section('title', "Tabla de ejercicios del usuario {$user->id}")

@section('content')
    <div class="card">
        <h4 class="card bg-info text-white">TABLA DE EJERCICIOS PARA EL USUARIO {{ $user->id }} </h4>
        <div class="card-body bg-light">
            <p class="card bg-info text-white"><b>{{ $ejercicio->tipo }}</b></p>
            <p class="card bg-secondary text-white">EJERCICIO 1:<p> <p class="card bg-light text-info"><b>{{ $ejercicio->ejercicio1 }}</b></p>
            <p class="card bg-secondary text-white">EJERCICIO 2:</p><p class="card bg-light text-info"><b>{{ $ejercicio->ejercicio2 }}</b></p>
            <p class="card bg-secondary text-white">EJERCICIO 3:</p><p class="card bg-light text-info"><b>{{ $ejercicio->ejercicio3 }}</b></p>
            <p class="card bg-secondary text-white">EJERCICIO 4:</p><p class="card bg-light text-info"><b>{{ $ejercicio->ejercicio4 }}</b></p>
            <p class="card bg-secondary text-white">EJERCICIO 5:</p><p class="card bg-light text-info"><b>{{ $ejercicio->ejercicio5 }}</b></p>
            <p class="card bg-secondary text-white">EJERCICIO 6:</p><p class="card bg-light text-info"><b>{{ $ejercicio->ejercicio6 }}</b></p>
            <p class="card bg-secondary text-white">EJERCICIO 7:</p><p class="card bg-light text-info"><b>{{ $ejercicio->ejercicio7 }}</b></p>
            <p class="card bg-secondary text-white">EJERCICIO 8:</p><p class="card bg-light text-info"><b>{{ $ejercicio->ejercicio8 }}</b></p>
            <a href="{{ route('users.perfil') }}" class="btn btn-link">Volver al perfil</a>
        </div>
    </div>
@endsection
