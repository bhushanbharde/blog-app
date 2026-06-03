<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\Dashboard\UserController;
use App\Models\Post;

// Posts
Route::get('/', function () {
    $posts = Post::with('user')->latest()->take(20)->get();
    return response()->json(['message' => 'Welcome to the Blog API', 'posts' => $posts]);
});

Route::post('register', [LoginController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);

Route::middleware('auth:sanctum')->post('logout', [LoginController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/user', [UserController::class, 'show']);