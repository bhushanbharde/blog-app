<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\ProfileController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\PostController as DashboardPostController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\CategoryController as DashboardCategoryController;
// use App\Http\Controllers\Dashboard\CommentController as DashboardCommentController;


Route::get('/users', [UserController::class, 'index'])->name('userlist');
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users/store', [UserController::class, 'store']);
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('/user/edit', [UserController::class, 'edit']);
Route::post('/user/{id}', [UserController::class, 'update']);
Route::delete('/user/{id}', [UserController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| FRONTEND ROUTES
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Home Page
|--------------------------------------------------------------------------
| View:
| resources/views/frontend/home.blade.php
|--------------------------------------------------------------------------
*/

Route::get('/',
    [HomeController::class, 'index'])
    ->name('home');



/*
|--------------------------------------------------------------------------
| POSTS ROUTES
|--------------------------------------------------------------------------
| Views:
| frontend/posts/index.blade.php
| frontend/posts/show.blade.php
| frontend/posts/create.blade.php
| frontend/posts/edit.blade.php
| frontend/posts/my-posts.blade.php
|--------------------------------------------------------------------------
*/

/* All Posts */
Route::get('/posts',
    [PostController::class, 'index'])
    ->name('posts.index');


/* Single Post */
Route::get('/posts/{slug}',
    [PostController::class, 'show'])
    ->name('posts.show');


/* Create Post Page */
Route::middleware('auth')->group(function () {

    Route::get('/posts/create',
        [PostController::class, 'create'])
        ->name('posts.create');

    Route::post('/posts',
        [PostController::class, 'store'])
        ->name('posts.store');

});


/* Edit Post */

Route::middleware('auth')->group(function () {

    Route::get('/posts/{post}/edit',
        [PostController::class, 'edit'])
        ->name('posts.edit');

    Route::put('/posts/{post}',
        [PostController::class, 'update'])
        ->name('posts.update');

});


/* My Posts */

Route::middleware('auth')->group(function () {

    Route::get('/my-posts',
        [PostController::class, 'myPosts'])
        ->name('posts.my');

});


/*
|--------------------------------------------------------------------------
| CATEGORY ROUTES
|--------------------------------------------------------------------------
| View:
| frontend/categories/show.blade.php
|--------------------------------------------------------------------------
*/

Route::get('/categories/{slug}',
    [CategoryController::class, 'show'])
    ->name('categories.show');


/*
|--------------------------------------------------------------------------
| PROFILE ROUTES
|--------------------------------------------------------------------------
| Views:
| frontend/profile/show.blade.php
| frontend/profile/edit.blade.php
|--------------------------------------------------------------------------
*/

/* Public Profile */

Route::get('/profile/{username}',
    [ProfileController::class, 'show'])
    ->name('profile.show');


/* Edit Profile */

Route::middleware('auth')->group(function () {

    Route::get('/profile/edit',
        [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::put('/profile/update',
        [ProfileController::class, 'update'])
        ->name('profile.update');

});


/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
| Views:
| frontend/auth/login.blade.php
| frontend/auth/register.blade.php
|--------------------------------------------------------------------------
*/

/* Guest Only */

Route::middleware('guest')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Login
    |--------------------------------------------------------------------------
    */

    Route::get('/login',
        [LoginController::class, 'showLoginForm'])
        ->name('login');

    Route::post('/login',
        [LoginController::class, 'login']);


    /*
    |--------------------------------------------------------------------------
    | Register
    |--------------------------------------------------------------------------
    */

    Route::get('/register',
        [RegisterController::class, 'showRegisterForm'])
        ->name('register');

    Route::post('/register',
        [RegisterController::class, 'register']);

});


/* Logout */

Route::post('/logout',
    [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');


/*
|--------------------------------------------------------------------------
| DASHBOARD ROUTES
|--------------------------------------------------------------------------
| Views:
| dashboard/*
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])
    ->prefix('dashboard')
    ->name('dashboard.')
    ->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Dashboard Home
    |--------------------------------------------------------------------------
    | View:
    | dashboard/index.blade.php
    |--------------------------------------------------------------------------
    */

    Route::get('/',
        [DashboardController::class, 'index'])
        ->name('index');


    /*
    |--------------------------------------------------------------------------
    | DASHBOARD POSTS
    |--------------------------------------------------------------------------
    | Views:
    | dashboard/posts/*
    |--------------------------------------------------------------------------
    */

    Route::resource('posts',
        DashboardPostController::class);


    /*
    |--------------------------------------------------------------------------
    | Trash Posts
    |--------------------------------------------------------------------------
    | View:
    | dashboard/posts/trash.blade.php
    |--------------------------------------------------------------------------
    */

    Route::get('/posts-trash',
        [DashboardPostController::class, 'trash'])
        ->name('posts.trash');


    /*
    |--------------------------------------------------------------------------
    | USERS
    |--------------------------------------------------------------------------
    | Views:
    | dashboard/users/*
    |--------------------------------------------------------------------------
    */

    Route::resource('users',
        UserController::class);


    /*
    |--------------------------------------------------------------------------
    | CATEGORIES
    |--------------------------------------------------------------------------
    | Views:
    | dashboard/categories/*
    |--------------------------------------------------------------------------
    */

    Route::resource('categories',
        DashboardCategoryController::class);


    /*
    |--------------------------------------------------------------------------
    | COMMENTS
    |--------------------------------------------------------------------------
    | Views:
    | dashboard/comments/*
    |--------------------------------------------------------------------------
    */

    // Route::get('/comments',
    //     [DashboardCommentController::class, 'index'])
    //     ->name('comments.index');

});