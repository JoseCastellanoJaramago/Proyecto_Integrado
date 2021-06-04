@extends('layout')

@section('title', 'Asignar tablas')

@section('content')
<div class="navbar-brand d-none d-lg-inline-block" id="centro">
    <form action="{{ route('trainer.asignar')}}" method="POST">
        <div class="row">
        @csrf
        @method('PUT')
        <h6 class="card bg-info text-white">Alumno: </h6>
        <select name="users_name" id="users_name" class="btn btn-light">
            <!-- Foreach para rellenar el select de usuarios -->
            @foreach($users as $user)
                @if($user->profession_id == null)
                    <option value="{{ $user['id'] }}">{{ $user['id'] }} - {{ $user['name'] }}</option>
                @endif
            @endforeach
        </select>
        </div>
        <br>
        <div class="row">
            <h6 class="card bg-info text-white">Tabla: </h6>
            <select name="ejercicios_tipo" id="ejercicios_tipo" class="btn btn-light">
                <!-- Foreach para rellenar el select de ejercicios -->
                @foreach($ejercicios as $ejercicio)
                    <option value="{{ $ejercicio['id'] }}">{{ $ejercicio['tipo'] }}</option>
                @endforeach
            </select>
        </div>
        <br><br>
        <div class="row">
            <input class="btn btn-secondary text-white" type="submit" value="Asignar tabla" />
        </div>
    </form>
</div>
@endsection

