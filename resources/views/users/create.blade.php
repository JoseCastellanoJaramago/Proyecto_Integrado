@extends('layout')

@section('title', "Crear nuevo usuario")

@section('content')
    <div class="card">
        <h4 class="card-header">Crear usuario</h4>
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

            <form method="POST" action="{{ url('usuarios') }}">
                {{ csrf_field() }}

                <div class="form group">
                    <label for="name">Nombre:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Pedro Pérez" value="{{ old('name') }}">
                </div>

                <div class="form group">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="pedro@example.com" value="{{ old('email') }}">
                </div>

                <div class="form group">
                    <label for="password">Contraseña:</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Más de 6 caracteres">
                </div>

                <div class="form group">
                    <label for="is_empleado">¿Es un entrenador?</label>
                    <input type="checkbox" id="is_empleado" name="is_empleado" value="{{ old('is_empleado') }}" onchange="javascript:showContent()" />
                </div>

                <script>
                    function showContent() {
                        element = document.getElementById("content");
                        check = document.getElementById("is_empleado");
                        if (check.checked) {
                            element.style.display='block';
                        }
                        else {
                            element.style.display='none';
                        }
                    }
                </script>

                <div class="form group" id="content" style="display: none;">
                    <label for="profession_id">Clase:</label>
                    <select name="profession_id" id="profession_id">
                        <option value="">-- Escoja la categoría --</option>
                        @foreach($professions as $profession)
                            <option value="{{ $profession['id'] }}">{{ $profession['title'] }}</option>
                        @endforeach
                    </select>
                </div>

                <br>
                <button type="submit" class="btn btn-primary">Crear usuario</button>
                <a href="{{ route('users.index') }}" class="btn btn-link">Volver al listado de usuarios</a>
            </form>
        </div>
    </div>
@endsection

