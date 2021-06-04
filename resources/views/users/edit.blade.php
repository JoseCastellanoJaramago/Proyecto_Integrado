@extends('layout')

@section('title', "Editar usuario")

@section('content')
    <div class="card">
        <h4 class="card bg-info text-white">EDITAR USUARIO</h4>
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

            <form method="POST" action="{{ url("usuarios/{$user->id}") }}">
                {{ method_field('PUT') }}
                {{ csrf_field() }}

                <div class="form group">
                    <label for="name" class="card bg-secondary text-white">Nombre:</label>
                    <input type="text" class="form-control text-info" name="name" id="name" placeholder="Pedro Pérez" value="{{ old('name', $user->name) }}">
                </div>

                <div class="form group">
                    <label for="email" class="card bg-secondary text-white">Correo electrónico:</label>
                    <input type="email" class="form-control text-info" name="email" id="email" placeholder="pedro@example.com" value="{{ old('email', $user->email) }}">
                </div>

                <div class="form group">
                    <label for="password" class="card bg-secondary text-white">Contraseña:</label>
                    <input type="password" class="form-control text-info" name="password" id="password" placeholder="Más de 6 caracteres">
                </div>
                <br>
                <button type="submit" class="btn btn-secondary">Actualizar usuario</button>
                <a href="{{ route('users.index') }}" class="btn btn-link">Volver al listado de usuarios</a>
            </form>
        </div>
    </div>
@endsection

