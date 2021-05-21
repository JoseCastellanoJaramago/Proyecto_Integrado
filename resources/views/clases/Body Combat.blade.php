@extends('layout')

@section('title', "Body Combat")

@section('content')

    <h4 class="display-3" align="center"> BODY COMBAT </h4>
    <h5>Miércoles de 10:00 - 11:00</h5>
    <img src="{{asset('img/bodyCombat.jpg')}}" class="card-img-top img-fluid">

    <p><br>En nuestras clases de Body Combat, nuestra entrenadora Britney os enseñará a practicar diferentes movimientos de artes marciales como:
    <h6>- Taekwondo</h6>
    <h6>- Karate</h6>
    <h6>- Capoeira</h6>
    <h6>- Muay thay</h6>
    <h6>- Boxeo</h6>

    <br>La estructura de las clases se compone de un primer <b>bloque de calentamiento dinámico</b>, como un acercamiento al ejercicio que se realizará más adelante.
    A continuación, un segundo <b>bloque de ejercicios de velocidad, energía y resistencia</b>, combinando tiempos de descanso en cada serie. Por último, un tercer
    <b>bloque de ejercicios de fuerza</b> que concluyen con una serie de estiramientos.<br>

    <a href="{{ route('clases.index') }}" class="btn btn-link">Volver</a>
@endsection
