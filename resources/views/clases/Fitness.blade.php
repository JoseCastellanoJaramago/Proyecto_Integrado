@extends('layout')

@section('title', "Fitness")

@section('content')
    <div class="card bg-light">
        <h4 class="card bg-info text-white" align="center"> FITNESS </h4>
        <h5 class="card bg-light">Lunes de 08:00 - 09:00</h5>
        <img src="{{asset('img/fitness.jpg')}}" class="card-img-top img-fluid">

        <p class="text-justify" id="actividades">Nuestras clases de fitness son clases estructuradas en las que nuestro entrenador, José Castellano, guiará a un grupo de máximo 15 personas
            para trabajar mediante coreografías nuestro cuerpo. El fitness aporta grandes <b>beneficios</b>:</p>
        <li id="actividades"> Incrementa tu energía</li>
        <li id="actividades"> Mejora la coordinación y la condición física</li>
        <li id="actividades"> Aporta bienestar al cuerpo</li>
        <li id="actividades"> Reduce el estrés</li>
        <li id="actividades"> Aumenta la autoestima</li><br>

        <p class="text-justify" id="actividades">El fitness es una actividad apta para cualquier persona, independientemente del sexo o la edad. Los únicos requisitos son <b>tener ganas de
            bailar, sudar y pasarlo bien.</b></p>
        <p class="text-justify" id="actividades">Se realizarán diferentes tipos de pasos y movimientos de alta y baja intensidad, pensados para que puedas disfrutar de estar trabajando
            tu cuerpo con intervalos para quemar todas las calorías posibles y casi sin darte cuenta.</p>
        <p class="text-justify" id="actividades">La música y la motivación que José aporta a cada una de sus clases harán que sientas unas ganas increíbles de darlo todo, y el buen rollo está
        asegurado.</p>

        @guest
            <a href="{{ route('actividades') }}" class="card bg-secondary text-white" id="content" align="center">Volver</a>
        @endguest
        @auth
            <a href="{{ route('clases.index') }}" class="card bg-secondary text-white" id="volverUsers" align="center">Volver</a>
        @endauth
    </div>

@endsection

