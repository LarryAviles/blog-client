@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row align-items-center">
        <div class="col">
            <h2>Autores</h2>
        </div>
        <div class="col">
            <a href="{{ url('author/create') }}" class="btn btn-primary float-end">Crear Autor</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo Electrónico</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
                <tr>
                    <td>{{ $author['id'] }}</td>
                    <td>{{ $author['name'] }}</td>
                    <td>{{ $author['email'] }}</td>
                    <td>
                        <a href="{{ url("author/{$author['id']}") }}" class="btn btn-info btn-sm">Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection