@extends('layout')

@section('title', "Fisioterapia")

@section('content')

    <h4 class="display-3" align="center"> FISIOTERAPIA </h4>
    <h5>Martes 16:00 - 17:00</h5>
    <img src="{{asset('img/fisioterapia.jpg')}}" class="card-img-top img-fluid">

    <p><br>Hasta ahora estábamos acostumbrados a recurrir a los servicios de un fisioterapeuta cuando el dolor no nos dejaba continuar pero, ¿eso es todo?
    <br>Entendemos nuestro centro como una forma integral de bienestar en el cuidado del cuerpo, por eso entendemos que la figura de este profesional sanitario
    es fundamental.
    <br>Tenemos la suerte de contar con la mejor, Gracie. Ella no solo <b>cura sobre una lesión</b>, sino que además se encarga de <b>divulgar y asesorarte</b>
    para que, gracias a una correcta ejecución de los ejercicios y movimientos, <b>puedas evitar lesiones</b>.
    <br>Otro punto fundamental de su trabajo es el <b>trabajo con lesiones repetidas</b>, ya sea por secuelas de una lesión original o por una tendencia
    propia de tu organismo.
    <br>La <b>recuperación de la lesión</b> también es parte de sus funciones. Trabajar con el músculo dañado de forma que se recupere lo antes posible sin
    secuelas.
    </p>

    <a href="{{ route('clases.index') }}" class="btn btn-link">Volver</a>
@endsection
