@extends('layout')

@section('title', "Prueba")

@section('content')
    <div class="card">
        <h4 class="card-header">Administrador</h4>
        <div class="card-body">
            <ul>
                <p>Selecciona la operación a realizar:</p>
                <li>
                    <a href="{{ route('users.index') }}" class="btn btn-link">Administrar usuarios</a>
                </li>
                <li>
                    <a href="{{ route('trainer.index') }}" class="btn btn-link">Administrar entrenadores</a>
                </li>
            </ul>
        </div>
    </div>
@endsection
