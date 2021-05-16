@extends('layout')

@section('title', 'Clases')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">{{ $title }}</h1>
    </div>

    <p><b>Haz clic sobre la actividad para más información</b></p>
    @if($clases->isNotEmpty())
        <table class="table">
            <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Horario</th>
                <th scope="col">Día</th>
                <th scope="col">Plazas</th>
                <th scope="col">Profesor</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clases as $clase)

{{--                @if($clase->is_empleado == 1)--}}
                    <tr>
                        <th scope="row">{{ $clase->id }}</th>
                        <td><a href="fitness.blade.php">{{ $clase->nombre }} </a></td>
                        <td>{{ $clase->horario }}</td>
                        <td>{{ $clase->dia }}</td>
                        <td>{{ $clase->plazas }}</td>
                        @foreach($users as $user)
                            @if($clase->user_id === $user->id)
                                <td>{{ $user->name }}</td>
                            @endif
                        @endforeach
                        <td>
{{--                            <form action="{{ route('trainer.destroy', $user) }}" method="POST">--}}
{{--                                {{ csrf_field() }}--}}
{{--                                {{ method_field('DELETE') }}--}}
{{--                                <a href="{{ route('trainer.show', $user) }}" class="btn btn-link"><span class="oi oi-eye"></span></a>--}}
{{--                                <a href="{{ route('trainer.edit', $user) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>--}}
{{--                                <button type="submit" class="btn btn-link"><span class="oi oi-trash"></span></button>--}}
{{--                            </form>--}}
                        </td>
                    </tr>
{{--                @endif--}}

            @endforeach
            </tbody>
        </table>
    @else
        <p>No hay clases disponibles</p>
    @endif

@endsection

@section('sidebar')
    @parent
@endsection
