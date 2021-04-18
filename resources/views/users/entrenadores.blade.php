@extends('layout')

@section('title', "Entrenador {$professions->id}")

@section('content')
    <div class="card">
            <h4 class="card-header">Empleado: {{ $users->id }}</h4>
            <div class="card-body">
                <p>Nombre del empleado: {{ $users->name }}</p>
                <p>Actividad: {{ $professions->title }}</p>

                <a href="{{ route('users.index') }}" class="btn btn-link">Volver al listado de usuarios</a>
            </div>
    </div>
@endsection




