@extends('layout')

@section('title', "Tabla de ejercicios del usuario {$user->id}")

@section('content')
    <div class="card">
        <h4 class="card-header">Ejercicio del usuario: {{ $user->id }} </h4>
        <div class="card-body">
            <p><b>Tipo de tabla: {{ $ejercicio->tipo }}</b></p>
            <p>Ejercicio 1: {{ $ejercicio->ejercicio1 }}</p>
            <p>Ejercicio 2: {{ $ejercicio->ejercicio2 }}</p>
            <p>Ejercicio 3: {{ $ejercicio->ejercicio3 }}</p>
            <p>Ejercicio 4: {{ $ejercicio->ejercicio4 }}</p>
            <p>Ejercicio 5: {{ $ejercicio->ejercicio5 }}</p>
            <p>Ejercicio 6: {{ $ejercicio->ejercicio6 }}</p>
            <p>Ejercicio 7: {{ $ejercicio->ejercicio7 }}</p>
            <p>Ejercicio 8: {{ $ejercicio->ejercicio8 }}</p>
            <a href="{{ route('users.perfil') }}" class="btn btn-link">Volver al perfil</a>
        </div>
    </div>
@endsection
