@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{$author['name']}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$author['email']}}</h6>
        </div>
        <div class="card-body">
            @if($author['posts']) 
            <h6 class="card-text">Posts publicados por el autor:</h6>
                <div class="row d-flex align-items-center">
                    @foreach($author['posts'] as $post)
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
            @endif

            @if($author['comments']) 
                <h6 class="card-text">Comentarios realizados por el autor:</h6>
                    @foreach($author['comments'] as $comment)
                        <div class="card mb-2">
                            <div class="card-body">
                                <p class="card-text">{{$comment['content']}}</p>
                                <p class="card-text">{{$comment['user']['name']}}</p>
                                <p class="card-text ">{{$comment['created_at']}}</p>
                            </div>
                        </div>
                    @endforeach
            @endif
        </div>
    </div>
    <a href="{{ url('/authors')}}" class="btn btn-secondary mt-3">Regresar</a>
@endsection