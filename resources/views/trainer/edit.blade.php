@extends('layout')

@section('title', "Editar entrenador")

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

            <form method="POST" action="{{ url("usuarios/{$user->id}") }}">
                {{ method_field('PUT') }}
                {{ csrf_field() }}

                <div class="form group">
                    <label for="name">Nombre:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Pedro Pérez" value="{{ old('name', $user->name) }}">
                </div>

                <div class="form group">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="pedro@example.com" value="{{ old('email', $user->email) }}">
                </div>

                <div class="form group">
                    <label for="password">Contraseña:</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Más de 6 caracteres">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Actualizar usuario</button>
                <a href="{{ route('trainer.index') }}" class="btn btn-link">Volver al listado de empleados</a>
            </form>
        </div>
    </div>
@endsection

