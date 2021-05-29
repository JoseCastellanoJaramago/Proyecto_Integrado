@extends('layout')

@section('title', "Usuario {$user->id}")

@section('content')
    <div class="navbar-brand d-none d-lg-inline-block" id="centro">
        <h4 class="card-header">Usuario: {{ $user->id }}</h4>
        <div class="card-body">
            <h4>Bienvenido {{ auth()->user()->name }} </h4>
            <p>Nombre del usuario: {{ auth()->user()->name }}</p>
            <p>Correo electrónico: {{ auth()->user()->email }}</p>
            @if( auth()->user()->clases_id == null)
                <p>Clase reservada para hoy: No tienes aún clase reservada</p>
            @else
                <p>Clase reservada para hoy: {{ $clase->dia }} - {{ $clase->nombre }} - {{ $clase->horario }}</p>
            @endif
        </div>
        <a class="btn btn-primary" href="{{ route('users.tablaEj') }}" >Ver tabla ejercicios</a>
    </div>
@endsection
