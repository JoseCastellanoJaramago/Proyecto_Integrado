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
                        @if($clase->plazas == 0)
                            <option value="{{ $clase['id'] }}" disabled="disabled">{{ $clase['id'] }} - {{ $clase['nombre'] }} - {{ $clase['dia'] }} - {{ $clase['horario'] }} ----- {{ $clase['plazas'] }} plazas disponibles</option>
                        @else
                            <option value="{{ $clase['id'] }}" >{{ $clase['id'] }} - {{ $clase['nombre'] }} ----- {{ $clase['dia'] }} - {{ $clase['horario'] }} ----- {{ $clase['plazas'] }} plazas disponibles</option>
                        @endif
                    @endforeach
                </select>
                </br>
                <input class="btn btn-primary" type="submit" value="Reservar clase" />

            </div>
            <br>
        </form>
    </div>
@endsection
