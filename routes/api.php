<?php

// use Illuminate\Http\Request;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Frontend\TagController;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::resource('posts', PostController::class);

// Staff Picks
Route::get('/staffpicks', function () {
    $topPosts = Post::with('user')      // 1. Eager load the user who created the post
    ->withCount('likes')                // 2. Add a virtual 'likes_count' column
    ->orderBy('likes_count', 'desc')    // 3. Sort by most liked first
    ->limit(3)                          // 4. Limit to the top 3 items
    ->get();

    return response()->json(['status' => true, 'posts' => $topPosts]);
});

//Top Tags
Route::get('/top-tags', function () {
    $topTags = Tag::withCount('posts')              // 1. Add a virtual 'posts_count' column
    ->orderBy('posts_count', 'desc')                // 2. Sort by most used first
    ->limit(5)                                      // 3. Limit to the top 5 items
    ->get();

    return response()->json(['status' => true, 'tags' => $topTags]);
});

// Top Authors
Route::get('/top-authors', function () {
    $topAuthors = User::withCount('posts')      // 1. Add a virtual 'posts_count' column
    ->orderBy('posts_count', 'desc')            // 2. Sort by most posts first
    ->limit(3)                                  // 3. Limit to the top 3 items
    ->get();

    return response()->json(['status' => true, 'authors' => $topAuthors]);
});

// USER ROUTES

Route::middleware('')->group(function () {
    Route::resource('users', UserController::class);
});

// TAG ROUTES
Route::resource('tags', TagController::class);

Route::post('register', [LoginController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);

Route::middleware('auth:sanctum')->post('logout', [LoginController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/user', [UserController::class, 'show']);