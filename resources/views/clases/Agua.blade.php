@extends('layout')

@section('title', "Agua")

@section('content')

    <h4 class="display-3" align="center"> AGUA </h4>
    <h5>Martes de 10:00 - 11:00</h5>
    <img src="{{asset('img/agua.jpg')}}" class="card-img-top img-fluid">

    <p><br>En nuestro centro disponemos de una piscina como complemento perfecto para los entrenamientos de pesas, musculación y clases dirigidas donde nuestro
    entrenador, Gianni, os guiará para obtener los mejores resultados.
    <br>Al trabajar con todos los músculos y articulaciones del cuerpo, las actividades acuáticas aporta grandes <b>beneficios</b> como mejorar problemas
    posturales o aumentar la fuerza y la resistencia. Además el agua nos regala una sensación de relajación inigualable.

    <br>Estas son las <b>actividades</b> que te proponemos:
    <h6>- Hidrogym</h6>
    <h6>- Aquadance</h6>
    <h6>- Aquapilates</h6>
    <h6>- Aquacross</h6>
    <h6>- Natación espalda</h6>

    <br>Actividades acuáticas aptas para todas las edades y niveles: desde estilos básicos hasta avanzados. Intensidad ajustable
    a cada integrante del grupo.</p>

    @guest
        <a href="{{ route('actividades') }}" class="btn btn-link" id="content">Volver</a>
    @endguest
    @auth
        <a href="{{ route('clases.index') }}" class="btn btn-link" id="volverUsers" >Volver</a>
    @endauth
@endsection
