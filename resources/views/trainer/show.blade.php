@extends('layout')

@section('title', "Usuario {$user->id}")

@section('content')
    <div class="card">
        <h4 class="card bg-info text-white">USUARIO {{ $user->id }}</h4>
        <div class="card-body bg-light">
            <p class="card bg-secondary text-white">Nombre del usuario: </p><p class="card bg-light text-info">{{ $user->name }}</p>
            <p class="card bg-secondary text-white">Correo electrónico: </p><p class="card bg-light text-info">{{ $user->email }}</p>
            <a href="{{ route('trainer.index') }}" class="btn btn-link">Volver al listado de empleados</a>
        </div>
    </div>
@endsection




