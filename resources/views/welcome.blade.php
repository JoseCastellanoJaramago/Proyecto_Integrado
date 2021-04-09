@extends('layout')

@section('title', "SafaGym")

@section('content')
    <div style="display:block; margin-left: auto; margin-right: auto; width:auto; height: auto">
        <div>
            <h4 class="display-3" align="center"> Bienvenid@ a SafaGym </h4>
        </div>

        <div>
            <img src="{{asset('img/gimnasio.jpg')}}" class="card-img-top img-fluid">
        </div>
    </div>

@endsection
