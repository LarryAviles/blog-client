<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::get($url.'/posts');
        $posts = $response->json('data');
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::get($url.'/posts/'.$id);
        $post = $response->json('data');
        return view('posts.show', compact('post'));
    }

    public function search(Request $request)
    {
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::get($url.'/posts/search',[
            'query' => $request->input('query')
        ]);
        $posts = $response->json('data');
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::post($url.'/post/store', [
            'user_id' => 1,
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return redirect()->route('posts.index');
    }
}
