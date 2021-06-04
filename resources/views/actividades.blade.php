@extends('layout')

@section('title', "SafaGym")

@section('content')
<div id="centro" class="card bg-light" align="center">
    <h4 class="card bg-info text-white" align="center">ACTIVIDADES DIRIGIDAS</h4>
    <div class="card bg-light" style="width: 18rem; display:inline-block">
        <img src="img/aerobic.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Aerobic</h5>
            <p class="card-text">Si quieres hacer deporte al son de la música...</p>
            <a href="{{ route('clases.Aerobic') }}" class="btn btn-secondary text-white">Más info</a>
        </div>
    </div>
    <div class="card bg-light" style="width: 18rem; display:inline-block">
        <img src="img/fitness.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Fitness</h5>
            <p class="card-text">Si quieres tonificar tus músculos y eliminar grasa...</p>
            <a href="{{ route('clases.Fitness') }}" class="btn btn-secondary text-white">Más info</a>
        </div>
    </div>
    <div class="card bg-light" style="width: 18rem; display:inline-block">
        <img src="img/agua.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Agua</h5>
            <p class="card-text">Si quieres fortalecer tu espalda mientras flotas...</p>
            <a href="{{ route('clases.Agua') }}" class="btn btn-secondary text-white">Más info</a>
        </div>
    </div>
    <div class="card bg-light" style="width: 18rem; display:inline-block">
        <img src="img/bodyCombat.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Body Combat</h5>
            <p class="card-text">Si quieres ejercitarte aprendiendo artes marciales...</p>
            <a href="{{ route('clases.Body Combat') }}" class="btn btn-secondary text-white">Más info</a>
        </div>
    </div>
    <div class="card bg-light" style="width: 18rem; display:inline-block">
        <img src="img/padel.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Pádel</h5>
            <p class="card-text">Si quieres eliminar estrés con una pelota, una pala y una pista...</p>
            <a href="{{ route('clases.Pádel') }}" class="btn btn-secondary text-white">Más info</a>
        </div>
    </div>
    <div class="card bg-light" style="width: 18rem; display:inline-block">
        <img src="img/pilates.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Pilates</h5>
            <p class="card-text">Si quieres ejercitar tu cuerpo y tu mente...</p>
            <a href="{{ route('clases.Pilates') }}" class="btn btn-secondary text-white">Más info</a>
        </div>
    </div>
    <div class="card bg-light" style="width: 18rem; display:inline-block">
        <img src="img/zumba.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Zumba</h5>
            <p class="card-text">Si quieres perder peso bailando música latina...</p>
            <a href="{{ route('clases.Zumba') }}" class="btn btn-secondary text-white">Más info</a>
        </div>
    </div>
    <div class="card bg-light" style="width: 18rem; display:inline-block">
        <img src="img/fisioterapia.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Fisioterapia</h5>
            <p class="card-text">Si quieres cuidar de tu musculatura...</p>
            <a href="{{ route('clases.Fisioterapia') }}" class="btn btn-secondary text-white">Más info</a>
        </div>
    </div>
</div>

@endsection
