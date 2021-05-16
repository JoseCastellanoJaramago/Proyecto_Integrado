@extends('layout')

@section('title', "Usuario {$user->id}")

@section('content')
    <div class="card">
        <h4 class="card-header">Usuario: {{ $user->id }}</h4>
        <div class="card-body">
            <h4>Bienvenido . {{ auth()->user()->name }} </h4>
            <p>Nombre del usuario: {{ auth()->user()->name }}</p>
            <p>Correo electrónico: {{ auth()->user()->email }}</p>
            <p>Clase: {{ $clases->nombre }}</p>
            <p>Horario: {{ $clases->horario }}</p>
            <p>Día de la semana: {{ $clases->dia }}</p>
            <p>Plazas: {{ $clases->plazas }}</p>
        </div>
    </div>
@endsection
