@extends('layout')

@section('title', "Admin")

@section('content')
    <div class="card">
        <h4 class="card bg-info text-white">Administrador</h4>
        <div class="card bg-light">
            <ul>
                <h5 >Selecciona la operación a realizar:</h5>
                <li>
                    <a href="{{ route('users.index') }}" class="btn btn-link">Administrar usuarios</a>
                </li>
                <li>
                    <a href="{{ route('trainer.index') }}" class="btn btn-link">Administrar entrenadores</a>
                </li>
                <li>
                    <a href="{{ route('ejercicios.index') }}" class="btn btn-link">Administrar ejercicios</a>
                </li>
            </ul>
        </div>
    </div>
@endsection
