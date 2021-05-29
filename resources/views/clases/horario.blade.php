@extends('layout')

@section('title', "Horarios")

@section('content')
    <div class="card">
        <h4 class="card-header">Horarios</h4>
        @if( auth()->user()->clases_id == null)
            <a href="{{ route('clases.index') }}" class="btn btn-danger"><b>RESERVA TU PLAZA</b></a>
        @else
            <a href="{{ route('clases.anularVista') }}" class="btn btn-danger"><b>ANULAR RESERVA</b></a>
        @endif
        <div class="card-body">
            <img src="{{asset('img/HorarioSafagym.jpg')}}" class="card-img-top img-fluid" id="imagenHorario">
        </div>
    </div>
@endsection
