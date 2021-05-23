@extends('layout')

@section('title', "Usuario {$user->id}")

@section('content')
    <div class="card">
        <h4 class="card-header">Usuario: {{ $user->id }}</h4>
        <div class="card-body">
            <h4>Bienvenido {{ auth()->user()->name }} </h4>
            <p>Nombre del usuario: {{ auth()->user()->name }}</p>
            <p>Correo electrónico: {{ auth()->user()->email }}</p>
        </div>
        <a class="btn btn-primary" href="{{ route('users.tablaEj') }}" >Ver tabla ejercicios</a>
    </div>
@endsection
