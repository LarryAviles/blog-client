@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="mb-4">Posts</h1>
            </div>
            <div class="col">
                <a href="{{ url('post/create')}}" class="btn btn-primary float-end">Crear Post</a>
            </div>
        </div>
        

        <form action="{{ url('posts/search') }}" method="GET" class="mb-4">
            <div class="input-group">
            <input type="text" name="query" class="form-control" placeholder="Buscar...">
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-search"></i> Buscar
            </button>
            </div>
        </form>
        <div class="row d-flex align-items-center">
            @foreach($posts as $post)
            <div class="col-sm-6 col-md-4 mt-3 mb-sm-0 ">
                <div class="card shadow">
                    <div class="card-body">
                    <h5 class="card-title">{{ $post['title'] }}</h5>
                    <p class="card-text">{{ $post['created_at'] }}</p>
                    <a href="{{ url("post/{$post['id']}") }}" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection