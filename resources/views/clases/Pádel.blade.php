@extends('layout')

@section('title', "Pádel")

@section('content')
    <div class="card bg-light">
        <h4 class="card bg-info text-white" align="center"> PÁDEL </h4>
        <h5 class="card bg-light">Lunes 20:00 - 21:00</h5>
        <img src="{{asset('img/padel.jpg')}}" class="card-img-top img-fluid">

        <p class="text-justify" id="actividades">Sin duda el deporte de moda. El pádel es un deporte que se adecúa a las características
            de sus jugadores y puede jugarse independientemente de la edad o el sexo. Por eso te invitamos a que
            conozcas nuestras espectaculares instalaciones para poder practicarlo.</p>
        <p class="text-justify" id="actividades">Además de <b>tonificar los músculos y ayudar a fortalecer el corazón,</b> el pádel
            también te proporcionará todos estos beneficios:</p>

        <li id="actividades"> Elimina el estrés</li>
        <li id="actividades"> Mejora tu coordinación y reflejos</li>
        <li id="actividades"> Ayuda a la superación personal y el compromiso</li>
        <li id="actividades"> Trabaja el trabajo en equipo y la sociabilidad</li><br>

        <p class="text-justify" id="actividades">Si hasta ahora no estabas seguro de animarte a convertir el pádel en parte de tu rutina,
            con estas razones ¡no tendrás excusas para no hacerlo!</p>

        @guest
            <a href="{{ route('actividades') }}" class="card bg-secondary text-white" id="content" align="center">Volver</a>
        @endguest
        @auth
            <a href="{{ route('clases.index') }}" class="card bg-secondary text-white" id="volverUsers" align="center">Volver</a>
        @endauth
    </div>
@endsection
