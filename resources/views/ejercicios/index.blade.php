@extends('layout')

@section('title', 'Ejercicios')
@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h4 class="card bg-info text-white" align="center">{{ $title }}</h4>
        <p>
            <a href="{{ route('ejercicios.create') }}" class="btn btn-secondary text-white">Nueva tabla de ejercicios</a>
        </p>
    </div>

    @if($ejercicios->isNotEmpty())
        <table class="table">
            <thead class="table-info">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Tipo</th>
                <th scope="col">Ejercicio 1</th>
                <th scope="col">Ejercicio 2</th>
                <th scope="col">Ejercicio 3</th>
                <th scope="col">Ejercicio 4</th>
                <th scope="col">Ejercicio 5</th>
                <th scope="col">Ejercicio 6</th>
                <th scope="col">Ejercicio 7</th>
                <th scope="col">Ejercicio 8</th>
                <th scope="col">Acción</th>
            </tr>
            </thead>
            <tbody class="card-body bg-light">
            @foreach($ejercicios as $ejercicio)
                <tr>
                    <th scope="row">{{ $ejercicio->id }}</th>
                    <td class="text-primary" >{{ $ejercicio->tipo }}</td>
                    <td>{{ $ejercicio->ejercicio1 }}</td>
                    <td>{{ $ejercicio->ejercicio2 }}</td>
                    <td>{{ $ejercicio->ejercicio3 }}</td>
                    <td>{{ $ejercicio->ejercicio4 }}</td>
                    <td>{{ $ejercicio->ejercicio5 }}</td>
                    <td>{{ $ejercicio->ejercicio6 }}</td>
                    <td>{{ $ejercicio->ejercicio7 }}</td>
                    <td>{{ $ejercicio->ejercicio8 }}</td>
                    <td>
                        <form action="{{ route('ejercicios.destroy', $ejercicio) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('ejercicios.show', $ejercicio) }}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                            <a href="{{ route('ejercicios.edit', $ejercicio) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                            <button type="submit" class="btn btn-link"><span class="oi oi-trash"></span></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ url('/') }}"  id="volverUsers" align="center">Volver</a>
    @else
        <p>No hay ejercicios registrados</p>
    @endif

@endsection
