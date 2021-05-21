@extends('layout')

@section('title', "Pádel")

@section('content')

    <h4 class="display-3" align="center"> PÁDEL </h4>
    <h5>Lunes 20:00 - 21:00</h5>
    <img src="{{asset('img/padel.jpg')}}" class="card-img-top img-fluid">

    <p><br>Sin duda el deporte de moda. El pádel es un deporte que se adecúa a las características de sus jugadores y puede jugarse independientemente de
    la edad o el sexo. Por eso te invitamos a que conozcas nuestras espectaculares instalaciones para poder practicarlo.
    <br>Además de <b>tonificar los músculos y ayudar a fortalecer el corazón,</b> el pádel también te proporcionará todos estos beneficios:

    <h6>- Elimina el estrés</h6>
    <h6>- Mejora tu coordinación y reflejos</h6>
    <h6>- Ayuda a la superación personal y el compromiso</h6>
    <h6>- Trabaja el trabajo en equipo y la sociabilidad</h6>

    <br>Si hasta ahora no estabas seguro de animarte a convertir el pádel en parte de tu rutina, con estas razones ¡no tendrás excusas para no hacerlo!
    </p>

    <a href="{{ route('clases.index') }}" class="btn btn-link">Volver</a>
@endsection
