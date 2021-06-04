@extends('layout')

@section('title', "Fisioterapia")

@section('content')
    <div class="card bg-light">
        <h4 class="card bg-info text-white" align="center"> FISIOTERAPIA </h4>
        <h5 class="card bg-light">Martes 16:00 - 17:00</h5>
        <img src="{{asset('img/fisioterapia.jpg')}}" class="card-img-top img-fluid">

        <p class="text-justify" id="actividades">Hasta ahora estábamos acostumbrados a recurrir a los servicios de un fisioterapeuta
            cuando el dolor no nos dejaba continuar pero, ¿eso es todo?</p>
        <p class="text-justify" id="actividades">Entendemos nuestro centro como una forma integral de bienestar en el cuidado del cuerpo, por eso entendemos que la figura de este profesional sanitario
            es fundamental.</p>
        <p class="text-justify" id="actividades">Tenemos la suerte de contar con la mejor, Gracie. Ella no solo <b>cura sobre una lesión</b>, sino que además se encarga de <b>divulgar y asesorarte</b>
            para que, gracias a una correcta ejecución de los ejercicios y movimientos, <b>puedas evitar lesiones</b>.</p>
        <p class="text-justify" id="actividades">Otro punto fundamental de su trabajo es el <b>trabajo con lesiones repetidas</b>, ya sea por secuelas de una lesión original o por una tendencia
            propia de tu organismo.</p>
        <p class="text-justify" id="actividades">La <b>recuperación de la lesión</b> también es parte de sus funciones. Trabajar con el músculo dañado de forma que se recupere lo antes posible sin
        secuelas.</p>

        @guest
            <a href="{{ route('actividades') }}" class="card bg-secondary text-white" id="content" align="center">Volver</a>
        @endguest
        @auth
            <a href="{{ route('clases.index') }}" class="card bg-secondary text-white" id="volverUsers" align="center">Volver</a>
        @endauth
    </div>
@endsection
