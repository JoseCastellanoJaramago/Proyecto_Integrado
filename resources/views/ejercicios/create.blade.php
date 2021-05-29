@extends('layout')

@section('title', "Crear nuevo ejercicio")

@section('content')
    <div class="card">
        <h4 class="card-header">Crear tabla de ejercicios</h4>
        <div class="card-body">
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
                    <label for="tipo">Tipo:</label>
                    <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Abdominales" value="{{ old('tipo') }}">
                </div>

                <div class="form group">
                    <label for="ejercicio1">Ejercicio 1:</label>
                    <input type="text" class="form-control" name="ejercicio1" id="ejercicio1" placeholder="" value="{{ old('ejercicio1') }}">
                </div>

                <div class="form group">
                    <label for="ejercicio2">Ejercicio 2:</label>
                    <input type="text" class="form-control" name="ejercicio2" id="ejercicio2" placeholder="" value="{{ old('ejercicio2') }}">
                </div>

                <div class="form group">
                    <label for="ejercicio3">Ejercicio 3:</label>
                    <input type="text" class="form-control" name="ejercicio3" id="ejercicio3" placeholder="" value="{{ old('ejercicio3') }}">
                </div>

                <div class="form group">
                    <label for="ejercicio4">Ejercicio 4:</label>
                    <input type="text" class="form-control" name="ejercicio4" id="ejercicio4" placeholder="" value="{{ old('ejercicio4') }}">
                </div>

                <div class="form group">
                    <label for="ejercicio5">Ejercicio 5:</label>
                    <input type="text" class="form-control" name="ejercicio5" id="ejercicio5" placeholder="" value="{{ old('ejercicio5') }}">
                </div>

                <div class="form group">
                    <label for="ejercicio6">Ejercicio 6:</label>
                    <input type="text" class="form-control" name="ejercicio6" id="ejercicio6" placeholder="" value="{{ old('ejercicio6') }}">
                </div>

                <div class="form group">
                    <label for="ejercicio7">Ejercicio 7:</label>
                    <input type="text" class="form-control" name="ejercicio7" id="ejercicio7" placeholder="" value="{{ old('ejercicio7') }}">
                </div>

                <div class="form group">
                    <label for="ejercicio8">Ejercicio 8:</label>
                    <input type="text" class="form-control" name="ejercicio8" id="ejercicio8" placeholder="" value="{{ old('ejercicio8') }}">
                </div>

                <br>
                <button type="submit" class="btn btn-primary">Crear tabla</button>
                <a href="{{ route('ejercicios.index') }}" class="btn btn-link">Volver al listado de ejercicios</a>
            </form>
        </div>
    </div>
@endsection
