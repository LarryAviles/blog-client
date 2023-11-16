@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <h2>Crear Post</h2>
        <form action="{{ route('post.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Nombre del Post</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Descripción</label>
            <textarea class="form-control" name="body"></textarea>
        </div>
        <a href="{{ url('/')}}" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
@endsection