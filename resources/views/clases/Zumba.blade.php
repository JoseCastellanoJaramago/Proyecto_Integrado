@extends('layout')

@section('title', "Zumba")

@section('content')
    <div class="card bg-light">
        <h4 class="card bg-info text-white" align="center"> ZUMBA </h4>
        <h5 class="card bg-light">Viernes 18:00 - 19:00</h5>
        <img src="{{asset('img/zumba.jpg')}}" class="card-img-top img-fluid">

        <p class="text-justify" id="actividades">Es una disciplina deportiva que se imparte en clases dirigidas en las que se realizan
            ejercicios aeróbicos con la finalidad de <b>perder peso</b> de forma divertida y <b>mejorar tu estado de
                ánimo</b> al ritmo de música latina como:</p>
        <li id="actividades"> Merengue</li>
        <li id="actividades"> Salsa</li>
        <li id="actividades"> Reggaeton</li>
        <li id="actividades"> Cumbia</li>

        <p class="text-justify" id="actividades">Durante los 60 minutos que dura la sesión, mezclaremos ritmos rápidos y lentos con
            series de ejercicios con los que tonificaremos la musculatura.</p>
        <p class="text-justify" id="actividades">Las clases están dirigidas a todas las personas, independientemente de su sexo o edad y
            no requieren preparación previa.</p>

        @guest
            <a href="{{ route('actividades') }}" class="card bg-secondary text-white" id="content" align="center">Volver</a>
        @endguest
        @auth
            <a href="{{ route('clases.index') }}" class="card bg-secondary text-white" id="volverUsers" align="center">Volver</a>
        @endauth
    </div>
@endsection
