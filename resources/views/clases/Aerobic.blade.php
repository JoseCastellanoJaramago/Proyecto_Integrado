@extends('layout')

@section('title', "Aerobic")

@section('content')
    <div class="card bg-light">
        <h4 class="card bg-info text-white" align="center">AEROBIC</h4>
        <h5 class="card bg-light">Lunes de 12:00 - 13:00</h5>
        <img src="{{asset('img/aerobic.jpg')}}" class="card-img-top img-fluid">
        <br>
        <p class="text-justify" id="actividades">Nuestras clases de aeróbic, de la mano de nuestro entrenador Anthony, permiten realizar
            un trabajo físico completo mientras, acompañados de la música, seguimos una secuencia de ejercicios.</p>
        <p class="text-justify" id="actividades">Para algunos de los ejercicios, nos ayudaremos además del <b>step</b>, que es una
            plataforma que nos permitirá subir y bajar al ritmo del ejercicio
        y nos permite, gracias a los diferentes niveles de plataforma, que personas de diferente nivel de entrenamiento
            puedan hacer la misma actividad al mismo tiempo y en el mismo ambiente.</p>
        <p class="text-justify" id="actividades">El aerobic nos aporta los siguientes beneficios.</p>
        <li class="text-justify" id="actividades"> Reduce grasa corporal</li>
        <li class="text-justify" id="actividades"> Mejora la función cardiovascular</li>
        <li class="text-justify" id="actividades"> Mejora la autoestima y el estado de ánimo</li>
        <li class="text-justify" id="actividades"> Disminuye a medio plazo la presión sanguínea</li>
        <li class="text-justify" id="actividades"> Estimula la memoria y la concentración</li>
        <br>
        @guest
            <a href="{{ route('actividades') }}" class="card bg-secondary text-white" id="content" align="center">Volver</a>
        @endguest
        @auth
            <a href="{{ route('clases.index') }}" class="card bg-secondary text-white" id="volverUsers" align="center">Volver</a>
        @endauth
    </div>

@endsection
