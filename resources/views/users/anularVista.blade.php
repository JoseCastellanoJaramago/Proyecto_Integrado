@extends('layout')

@section('title', "Usuario {$user->id}")

@section('content')
    <div class="navbar-brand d-none d-lg-inline-block" id="centro">
        <h4 class="card-header">Ya tienes una clase reservada</h4>
        <div class="card-body">
            <p>Clase reservada: {{ $clase->dia }} - {{ $clase->nombre }} - {{ $clase->horario }}</p>
            <form action="{{ route('clases.anular')}}" method="POST">
                <div class="row">
                    @csrf
                    @method('PUT')
                    <input class="btn btn-primary" type="submit" value="Anular reserva" />
                </div>
                <br>
            </form>
        </div>

    </div>
@endsection
