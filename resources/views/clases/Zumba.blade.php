@extends('layout')

@section('title', "Zumba")

@section('content')

    <h4 class="display-3" align="center"> ZUMBA </h4>
    <h5>Viernes 18:00 - 19:00</h5>
    <img src="{{asset('img/zumba.jpg')}}" class="card-img-top img-fluid">

    <p><br>Es una disciplina deportiva que se imparte en clases dirigidas en las que se realizan ejercicios aeróbicos con la finalidad de <b>perder peso</b>
        de forma divertida y <b>mejorar tu estado de ánimo</b> al ritmo de música latina como:
    <h6>- Merengue</h6>
    <h6>- Salsa</h6>
    <h6>- Reggaeton</h6>
    <h6>- Cumbia</h6>

    <br>Durante los 60 minutos que dura la sesión, mezclaremos ritmos rápidos y lentos con series de ejercicios con los que tonificaremos la musculatura.
    <br>Las clases están dirigidas a todas las personas, independientemente de su sexo o edad y no requieren preparación previa.
    </p>

    @guest
        <a href="{{ route('actividades') }}" class="btn btn-link" id="content">Volver</a>
    @endguest
    @auth
        <a href="{{ route('clases.index') }}" class="btn btn-link" id="volverUsers" >Volver</a>
    @endauth
@endsection
