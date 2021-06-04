@extends('layout')

@section('title', "Agua")

@section('content')
    <div class="card bg-light" id="actividades">
        <h4 class="card bg-info text-white" align="center">AGUA</h4>
        <h5 class="card bg-light">Martes de 10:00 - 11:00</h5>
        <img src="{{asset('img/agua.jpg')}}" class="card-img-top img-fluid">

        <p class="text-justify" id="actividades">En nuestro centro disponemos de una piscina como complemento perfecto para los entrenamientos de pesas, musculación y clases dirigidas donde nuestro
            entrenador, Gianni, os guiará para obtener los mejores resultados.</p>
        <p class="text-justify" id="actividades">Al trabajar con todos los músculos y articulaciones del cuerpo, las actividades acuáticas aporta grandes <b>beneficios</b> como mejorar problemas
            posturales o aumentar la fuerza y la resistencia. Además el agua nos regala una sensación de relajación inigualable.</p>

        <p class="text-justify" id="actividades">Estas son las <b>actividades</b> que te proponemos:</p>
        <li id="actividades"> Hidrogym</li>
        <li id="actividades"> Aquadance</li>
        <li id="actividades"> Aquapilates</li>
        <li id="actividades"> Aquacross</li>
        <li id="actividades"> Natación espalda</li><br>

        <p class="text-justify" id="actividades">Actividades acuáticas aptas para todas las edades y niveles: desde estilos básicos hasta avanzados. Intensidad ajustable
        a cada integrante del grupo.</p>

        @guest
            <a href="{{ route('actividades') }}" class="card bg-secondary text-white" id="content" align="center">Volver</a>
        @endguest
        @auth
            <a href="{{ route('clases.index') }}" class="card bg-secondary text-white" id="volverUsers" align="center">Volver</a>
        @endauth
    </div>
@endsection
