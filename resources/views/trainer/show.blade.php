@extends('layout')

@section('title', "Usuario {$user->id}")

@section('content')
    <div class="card">
        <h4 class="card-header">Usuario: {{ $user->id }}</h4>
        <div class="card-body">
            <p>Nombre del usuario: {{ $user->name }}</p>
            <p>Correo electrónico: {{ $user->email }}</p>
            <a href="{{ route('trainer.index') }}" class="btn btn-link">Volver al listado de empleados</a>
        </div>
    </div>
@endsection




