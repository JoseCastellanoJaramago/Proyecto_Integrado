@extends('layout')

@section('title', "Editar usuario")

@section('content')
    <div class="card">
        <h4 class="card-header">Editar usuario</h4>
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

            <form method="POST" action="{{ url("ejercicios/{$ejercicio->id}") }}">
                {{ method_field('PUT') }}
                {{ csrf_field() }}

                <div class="form group">
                    <label for="name">Tipo:</label>
                    <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Abdominales" value="{{ old('tipo', $ejercicio->tipo) }}">
                </div>

                <div class="form group">
                    <label for="email">Ejercicio 1:</label>
                    <input type="text" class="form-control" name="ejercicio1" id="ejercicio1" placeholder="" value="{{ old('ejercicio1', $ejercicio->ejercicio1) }}">
                </div>

                <div class="form group">
                    <label for="password">Ejercicio 2:</label>
                    <input type="text" class="form-control" name="ejercicio2" id="ejercicio2" placeholder="" value="{{ old('ejercicio2', $ejercicio->ejercicio2) }}">
                </div>

                <div class="form group">
                    <label for="password">Ejercicio 3:</label>
                    <input type="text" class="form-control" name="ejercicio3" id="ejercicio3" placeholder="" value="{{ old('ejercicio3', $ejercicio->ejercicio3) }}">
                </div>

                <div class="form group">
                    <label for="password">Ejercicio 4:</label>
                    <input type="text" class="form-control" name="ejercicio4" id="ejercicio4" placeholder="" value="{{ old('ejercicio4', $ejercicio->ejercicio4) }}">
                </div>

                <div class="form group">
                    <label for="password">Ejercicio 5:</label>
                    <input type="text" class="form-control" name="ejercicio5" id="ejercicio5" placeholder="" value="{{ old('ejercicio5', $ejercicio->ejercicio5) }}">
                </div>

                <div class="form group">
                    <label for="password">Ejercicio 6:</label>
                    <input type="text" class="form-control" name="ejercicio6" id="ejercicio6" placeholder="" value="{{ old('ejercicio6', $ejercicio->ejercicio6) }}">
                </div>

                <div class="form group">
                    <label for="password">Ejercicio 7:</label>
                    <input type="text" class="form-control" name="ejercicio7" id="ejercicio7" placeholder="" value="{{ old('ejercicio7', $ejercicio->ejercicio7) }}">
                </div>

                <div class="form group">
                    <label for="password">Ejercicio 8:</label>
                    <input type="text" class="form-control" name="ejercicio8" id="ejercicio8" placeholder="" value="{{ old('ejercicio8', $ejercicio->ejercicio8) }}">
                </div>

                <br>
                <button type="submit" class="btn btn-primary">Actualizar ejercicio</button>
                <a href="{{ route('ejercicios.index') }}" class="btn btn-link">Volver al listado de ejercicios</a>
            </form>
        </div>
    </div>
@endsection

