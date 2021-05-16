@extends('layout')

@section('title', 'Entrenadores')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">{{ $title }}</h1>
    </div>

    @if($users->isNotEmpty())
        <table class="table">
            <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Actividades</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
                    @foreach($users as $user)

                            @if($user->is_empleado == 1)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                @foreach($professions as $profession)
                                    @if($profession->id === $user->profession_id)
                                        <td>{{ $profession->title }}</td>
                                    @endif
                                @endforeach
                                <td>
                                    <form action="{{ route('trainer.destroy', $user) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <a href="{{ route('trainer.show', $user) }}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                                        <a href="{{ route('trainer.edit', $user) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                                        <button type="submit" class="btn btn-link"><span class="oi oi-trash"></span></button>
                                    </form>
                                </td>
                            </tr>
                            @endif

                    @endforeach
            </tbody>
        </table>
    @else
        <p>No hay usuarios registrados</p>
    @endif

@endsection

@section('sidebar')
    @parent
@endsection

