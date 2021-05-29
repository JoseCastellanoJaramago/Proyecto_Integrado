@extends('layout')

@section('title', "Fitness")

@section('content')

    <h4 class="display-3" align="center"> NORMAS DE SEGURIDAD POR EL COVID-19 </h4>
    <img src="{{asset('img/normasCovid.png')}}" class="card-img-top img-fluid" id="normasCovidImg">
{{--    @guest--}}
{{--        <a href="{{ route('actividades') }}" class="btn btn-link" id="content">Volver</a>--}}
{{--    @endguest--}}
{{--    @auth--}}
{{--        <a href="{{ route('clases.index') }}" class="btn btn-link" id="volverUsers" >Volver</a>--}}
{{--    @endauth--}}

@endsection
