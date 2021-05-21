@extends('layout')

@section('title', "Fitness")

@section('content')

    <h4 class="display-3" align="center"> FITNESS </h4>
    <h5>Lunes de 08:00 - 09:00</h5>
    <img src="{{asset('img/fitness.jpg')}}" class="card-img-top img-fluid">
    <p><br>Nuestras clases de fitness son clases estructuradas en las que nuestro entrenador, José Castellano, guiará a un grupo de máximo 15 personas
        para trabajar mediante coreografías nuestro cuerpo. El fitness aporta grandes <b>beneficios</b>:
    <h6>- Incrementa tu energía</h6>
    <h6>- Mejora la coordinación y la condición física</h6>
    <h6>- Aporta bienestar al cuerpo</h6>
    <h6>- Reduce el estrés</h6>
    <h6>- Aumenta la autoestima</h6>

    <br>El fitness es una actividad apta para cualquier persona, independientemente del sexo o la edad. Los únicos requisitos son <b>tener ganas de
        bailar, sudar y pasarlo bien.</b>
    <br><br>Se realizarán diferentes tipos de pasos y movimientos de alta y baja intensidad, pensados para que puedas disfrutar de estar trabajando
    tu cuerpo con intervalos para quemar todas las calorías posibles y casi sin darte cuenta.
    <br><br>La música y la motivación que José aporta a cada una de sus clases harán que sientas unas ganas increíbles de darlo todo, y el buen rollo está
    asegurado.</p>

    <a href="{{ route('clases.index') }}" class="btn btn-link">Volver</a>

@endsection

