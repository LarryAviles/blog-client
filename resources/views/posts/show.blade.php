@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{$post['title']}}</h5>
        </div>
        <div class="card-body">
        <p class="card-text">{{$post['body']}}</p>
        <p class="card-text">Posted: {{$post['created_at']}}</p>
        <p class="card-text">Author: {{$post['author']['name']}}</p>
        </div>
    </div>
    <div class="container my-4">
        <h4>Sección de comentarios</h4>
    </div>
    @foreach($post['comments'] as $comment)
        <div class="card mb-2">
            <div class="card-body">
                <p class="card-text">{{$comment['content']}}</p>
                <p class="card-text">{{$comment['user']['name']}}</p>
                <p class="card-text ">{{$comment['created_at']}}</p>
            </div>
        </div>
    @endforeach
    <div class="container mt-4">
        <h4>Agregar comentario</h4>
        <form action="{{ url('/comment/store') }}" method="post">
            @csrf
            <input type="hidden" name="postId" value="{{$post['id']}}">    
            <textarea name="content" class="form-control" cols="20" rows="10"></textarea>
    
            <button type="submit" class="btn btn-primary mt-2">Guardar comentario</button>
        </form>
    </div>
    <div class="container mt-4">
        <h2>Exportar Comentarios a Google Sheets</h2>
    
        <form action="{{ url('/comments/export') }}" method="post">
            @csrf
            <label for="start_date">Fecha de Inicio:</label>
            <input type="date" name="start_date" required>
    
            <label for="end_date">Fecha de Fin:</label>
            <input type="date" name="end_date" required>
    
            <button type="submit" class="btn btn-primary">Exportar a Google Sheets</button>
        </form>
    </div>
  <a href="{{ url('/')}}" class="btn btn-secondary mt-3">Regresar</a>
@endsection