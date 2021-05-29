@extends('layout')

@section('title', 'Alumnos')

@section('content')
<div class="navbar-brand d-none d-lg-inline-block" id="centro">
    <form action="{{ route('trainer.asignar')}}" method="POST">
        <div class="row">
        @csrf
        @method('PUT')
        <label>Alumno: </label>
        <select name="users_name" id="users_name">
            @foreach($users as $user)
                @if($user->profession_id == null)
                    <option value="{{ $user['id'] }}">{{ $user['id'] }} - {{ $user['name'] }}</option>
                @endif
            @endforeach
        </select>
        </div>
        <br>
        <div class="row">
        <label>Tabla: </label>
        <select name="ejercicios_tipo" id="ejercicios_tipo">
            @foreach($ejercicios as $ejercicio)
                <option value="{{ $ejercicio['id'] }}">{{ $ejercicio['tipo'] }}</option>
            @endforeach
        </select>
        </div>
        <br><br>
        <div class="row">
        <input class="btn btn-primary" type="submit" value="Asignar tabla" />
        </div>
    </form>
</div>
@endsection

