@extends('layout')

@section('title', 'Usuarios')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h4 class="card bg-info text-white" align="center">{{ $title }}</h4>

        <p>
            <a href="{{ route('users.create') }}" class="btn btn-secondary">Nuevo usuario</a>
        </p>
    </div>

    @if($users->isNotEmpty())
        <table class="table">
            <thead class="table-info">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="card-body bg-light">
            <!-- Foreach para todos los  usuarios -->
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td class="text-primary">{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <form action="{{ route('users.destroy', $user) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('users.show', $user) }}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                            <a href="{{ route('users.edit', $user) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                            <button type="submit" class="btn btn-link"><span class="oi oi-trash"></span></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ url('/') }}"  id="volverUsers" align="center">Volver</a>
    @else
        <p>No hay usuarios registrados</p>
    @endif

@endsection

@section('sidebar')
    @parent
@endsection

