@extends('layout')

@section('title', "Horarios")

@section('content')
    <div class="card">
        <h4 class="card bg-info text-white" align="center">HORARIOS</h4>
        @if( auth()->user()->clases_id == null)
            <a href="{{ route('clases.index') }}" class="btn btn-danger"><b>RESERVA TU PLAZA</b></a>
        @else
            <a href="{{ route('clases.anularVista') }}" class="btn btn-danger"><b>ANULAR RESERVA</b></a>
        @endif
        <a href="{{url('usuarios/horarios/descargar')}}" class="btn btn-secondary text-white">DESCARGAR HORARIO</a>
        <div>

        </div>
        <div class="card-body">
            <img src="{{asset('img/HorarioSafagym.jpg')}}" class="card-img-top img-fluid" id="imagenHorario">
        </div>
    </div>
@endsection
