@extends('layout')

@section('title', "Body Combat")

@section('content')
    <div class="card bg-light">
        <h4 class="card bg-info text-white" align="center">BODY COMBAT</h4>
        <h5 class="card bg-light">Miércoles de 10:00 - 11:00</h5>
        <img src="{{asset('img/bodyCombat.jpg')}}" class="card-img-top img-fluid">

        <p class="text-justify" id="actividades">En nuestras clases de Body Combat, nuestra entrenadora Britney os enseñará a practicar diferentes movimientos de artes marciales como:</p>
        <li id="actividades"> Taekwondo</li>
        <li id="actividades"> Karate</li>
        <li id="actividades"> Capoeira</li>
        <li id="actividades"> Muay thay</li>
        <li id="actividades"> Boxeo</li><br>

        <p class="text-justify" id="actividades">La estructura de las clases se compone de un primer <b>bloque de calentamiento dinámico</b>, como un acercamiento al ejercicio que se realizará más adelante.
        A continuación, un segundo <b>bloque de ejercicios de velocidad, energía y resistencia</b>, combinando tiempos de descanso en cada serie.
        Por último, un tercer<b> bloque de ejercicios de fuerza</b> que concluyen con una serie de estiramientos.</p><br>

        @guest
            <a href="{{ route('actividades') }}" class="card bg-secondary text-white" id="content" align="center">Volver</a>
        @endguest
        @auth
            <a href="{{ route('clases.index') }}" class="card bg-secondary text-white" id="volverUsers" align="center">Volver</a>
        @endauth
    </div>
@endsection
