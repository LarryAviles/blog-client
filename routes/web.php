<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/search', [PostController::class, 'search'])->name('posts.search');
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');
Route::post('/post/store', [PostController::class, 'store'])->name('post.store');

Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/author/create', [AuthorController::class, 'create'])->name('author.create');
Route::get('/author/{id}', [AuthorController::class, 'show'])->name('author.show');
Route::post('/author/store', [AuthorController::class, 'store'])->name('author.store');
Route::post('/author/{id}/destroy', [AuthorController::class, 'destroy'])->name('author.destroy');

Route::post('/comments/export', [CommentController::class, 'export'])->name('comments.export');
Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.store');