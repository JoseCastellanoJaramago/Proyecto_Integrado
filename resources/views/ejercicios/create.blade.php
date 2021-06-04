@extends('layout')

@section('title', "Crear nuevo ejercicio")

@section('content')
    <div class="card">
        <h4 class="card bg-info text-white">Crear tabla de ejercicios</h4>
        <div class="card-body bg-light">
            @if ($errors->any())
                <div class="alert alert-danger"> <!--boostrap-->
                    <p>Por favor, corrige los errores debajo:</p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ url('ejercicios') }}">
                {{ csrf_field() }}

                <div class="form group">
                    <label for="tipo" class="card bg-secondary text-white">Tipo:</label>
                    <input type="text" class="form-control text-info" name="tipo" id="tipo" placeholder="Abdominales" value="{{ old('tipo') }}">
                </div>

                <div class="form group">
                    <label for="ejercicio1" class="card bg-secondary text-white">Ejercicio 1:</label>
                    <input type="text" class="form-control text-info" name="ejercicio1" id="ejercicio1" placeholder="" value="{{ old('ejercicio1') }}">
                </div>

                <div class="form group">
                    <label for="ejercicio2" class="card bg-secondary text-white">Ejercicio 2:</label>
                    <input type="text" class="form-control text-info" name="ejercicio2" id="ejercicio2" placeholder="" value="{{ old('ejercicio2') }}">
                </div>

                <div class="form group">
                    <label for="ejercicio3" class="card bg-secondary text-white">Ejercicio 3:</label>
                    <input type="text" class="form-control text-info" name="ejercicio3" id="ejercicio3" placeholder="" value="{{ old('ejercicio3') }}">
                </div>

                <div class="form group">
                    <label for="ejercicio4" class="card bg-secondary text-white">Ejercicio 4:</label>
                    <input type="text" class="form-control text-info" name="ejercicio4" id="ejercicio4" placeholder="" value="{{ old('ejercicio4') }}">
                </div>

                <div class="form group">
                    <label for="ejercicio5" class="card bg-secondary text-white">Ejercicio 5:</label>
                    <input type="text" class="form-control text-info" name="ejercicio5" id="ejercicio5" placeholder="" value="{{ old('ejercicio5') }}">
                </div>

                <div class="form group">
                    <label for="ejercicio6" class="card bg-secondary text-white">Ejercicio 6:</label>
                    <input type="text" class="form-control text-info" name="ejercicio6" id="ejercicio6" placeholder="" value="{{ old('ejercicio6') }}">
                </div>

                <div class="form group">
                    <label for="ejercicio7" class="card bg-secondary text-white">Ejercicio 7:</label>
                    <input type="text" class="form-control text-info" name="ejercicio7" id="ejercicio7" placeholder="" value="{{ old('ejercicio7') }}">
                </div>

                <div class="form group">
                    <label for="ejercicio8" class="card bg-secondary text-white">Ejercicio 8:</label>
                    <input type="text" class="form-control text-info" name="ejercicio8" id="ejercicio8" placeholder="" value="{{ old('ejercicio8') }}">
                </div>

                <br>
                <button type="submit" class="btn btn-secondary">Crear tabla</button>
                <a href="{{ route('ejercicios.index') }}" class="btn btn-link">Volver al listado de ejercicios</a>
            </form>
        </div>
    </div>
@endsection
