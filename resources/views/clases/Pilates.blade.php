@extends('layout')

@section('title', "Pilates")

@section('content')
    <div class="card bg-light">
        <h4 class="card bg-info text-white" align="center"> PILATES </h4>
        <h5 class="card bg-light">Jueves de 09:00 - 12:00</h5>
        <img src="{{asset('img/pilates.jpg')}}" class="card-img-top img-fluid">

        <p class="text-justify" id="actividades">El método pilates es un sistema de entrenamiento del cuerpo y la mente, en el que se
            combina el <b>fortalecimiento de ciertos músculos con el control mental, la relajación y la respiración.</b>
            Las principales ventajas del pilates son:</p>
        <li id="actividades"> Corregir posturas erróneas</li>
        <li id="actividades"> Fortalecer los músculos que protegen la columna vertebral</li>
        <li id="actividades"> Evitar dolores de espalda</li><br>

        <p class="text-justify" id="actividades">Las clases tienen una duración de 45 minutos, comenzando y terminando en todas ellas con
            una serie de ejercicios de relajación.<br></p>

        @guest
            <a href="{{ route('actividades') }}" class="card bg-secondary text-white" id="content" align="center">Volver</a>
        @endguest
        @auth
            <a href="{{ route('clases.index') }}" class="card bg-secondary text-white" id="volverUsers" align="center">Volver</a>
        @endauth
    </div>
@endsection
