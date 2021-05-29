@extends('layout')

@section('title', 'Reservas')

@section('content')
    <div class="navbar-brand d-none d-lg-inline-block" id="centro">
        <form action="{{ route('clases.asignar')}}" method="POST">
            <div class="row">
                @csrf
                @method('PUT')
                <label>Elige clase a reservar: </label>
                <select name="clases_name" id="clases_name">
                    @foreach($clases as $clase)
                                <option value="{{ $clase['id'] }}">{{ $clase['id'] }} - {{ $clase['nombre'] }} - {{ $clase['horario'] }}</option>
                    @endforeach
                </select>
                </br>
                <input class="btn btn-primary" type="submit" value="Reservar clase" />
            </div>
            <br>
        </form>
    </div>
@endsection
