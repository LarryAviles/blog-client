<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::get($url.'/users');
        $users = $response->json('data');
        return view('authors.index', compact('users'));
    }
}
