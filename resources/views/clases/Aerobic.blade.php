@extends('layout')

@section('title', "Aerobic")

@section('content')

    <h4 class="display-3" align="center"> AEROBIC </h4>
    <h5>Lunes de 12:00 - 13:00</h5>
    <img src="{{asset('img/aerobic.jpg')}}" class="card-img-top img-fluid">

    <p><br>Nuestras clases de aeróbic, de la mano de nuestro entrenador Anthony, permiten realizar un trabajo físico completo mientras, acompañados de la
    música, seguimos una secuencia de ejercicios.
    <br><br>Para algunos de los ejercicios, nos ayudaremos además del <b>step</b>, que es una plataforma que nos permitirá subir y bajar al ritmo del ejercicio
    y nos permite, gracias a los diferentes niveles de plataforma, que personas de diferente nivel de entrenamiento puedan hacer la misma actividad al mismo
    tiempo y en el mismo ambiente.
    <br><br>El aerobic nos aporta los siguientes beneficios.
    <h6>- Reduce grasa corporal</h6>
    <h6>- Mejora la función cardiovascular</h6>
    <h6>- Mejora la autoestima y el estado de ánimo</h6>
    <h6>- Disminuye a medio plazo la presión sanguínea</h6>
    <h6>- Estimula la memoria y la concentración</h6>

    @guest
        <a href="{{ route('actividades') }}" class="btn btn-link" id="content">Volver</a>
    @endguest
    @auth
        <a href="{{ route('clases.index') }}" class="btn btn-link" id="volverUsers" >Volver</a>
    @endauth

@endsection
