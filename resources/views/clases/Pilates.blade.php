@extends('layout')

@section('title', "Pilates")

@section('content')

    <h4 class="display-3" align="center"> PILATES </h4>
    <h5>Jueves de 09:00 - 12:00</h5>
    <img src="{{asset('img/pilates.jpg')}}" class="card-img-top img-fluid">

    <p><br>El método pilates es un sistema de entrenamiento del cuerpo y la mente, en el que se combina el <b>fortalecimiento de ciertos músculos con el control
    mental, la relajación y la respiración.</b> Las principales ventajas del pilates son:
    <h6>- Corregir posturas erróneas</h6>
    <h6>- Fortalecer los músculos que protegen la columna vertebral</h6>
    <h6>- Evitar dolores de espalda</h6>

    <br>Las clases tienen una duración de 45 minutos, comenzando y terminando en todas ellas con una serie de ejercicios de relajación.<br></p>

    @guest
        <a href="{{ route('actividades') }}" class="btn btn-link" id="content">Volver</a>
    @endguest
    @auth
        <a href="{{ route('clases.index') }}" class="btn btn-link" id="volverUsers" >Volver</a>
    @endauth
@endsection
