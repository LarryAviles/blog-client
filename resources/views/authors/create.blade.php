@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <h1>Crear Autor</h1>

    <form action="{{ route('author.store') }}" method="POST">
      @csrf

      <div class="mb-3">
        <label for="name" class="form-label">Nombre del Autor</label>
        <input type="text" name="name" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Correo Electrónico</label>
        <input type="email" name="email" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" name="password" class="form-control" required>
      </div>

      <a href="{{ url('/authors')}}" class="btn btn-secondary">Regresar</a>
      <button type="submit" class="btn btn-primary">Agregar Autor</button>
    </form>
    </div>
@endsection