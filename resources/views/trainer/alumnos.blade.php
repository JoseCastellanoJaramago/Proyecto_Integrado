@extends('layout')

@section('title', 'Alumnos')

@section('content')
<div class="card">
    <form action="{{ route('trainer.asignar')}}" method="POST">
        @csrf
        @method('PUT')
        <select name="users_name" id="users_name">
            @foreach($users as $user)
                @if($user->profession_id == null)
                    <option value="{{ $user['id'] }}">{{ $user['name'] }}</option>
                @endif
            @endforeach
        </select>

        <select name="ejercicios_tipo" id="ejercicios_tipo">
            @foreach($ejercicios as $ejercicio)
                <option value="{{ $ejercicio['id'] }}">{{ $ejercicio['tipo'] }}</option>
            @endforeach
        </select>
        <input type="submit" value="Asignar tabla" />
    </form>
@endsection
</div>
