<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::get($url.'/authors');
        $authors = $response->json('data');
        return view('authors.index', compact('authors'));
    }

    public function show($id)
    {
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::get($url.'/author/'.$id);
        $author = $response->json('data');
        return view('authors.show', compact('author'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::post($url.'/author/store', [
            'user_id' => 1,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect()->route('authors.index');
    }
}
