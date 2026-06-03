<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Frontend\TagController;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PostController;

use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\PostController as DashboardPostController;
// use App\Http\Controllers\Dashboard\CategoryController as DashboardCategoryController;
use App\Http\Controllers\Dashboard\TagController as DashboardTagController;

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// /* All Posts */
Route::resource('posts', PostController::class);

// 2. Protected routes requiring authentication
// Route::middleware('auth')->group(function () {
    // Route::resource('posts', PostController::class)->except(['index', 'show']);
// });


/* My Posts */
Route::middleware('auth')->group(function () {
    Route::get('/my-posts', [PostController::class, 'myPosts'])->name('posts.my');
});


// CATEGORY ROUTES
Route::get('/categories/{slug}', [CategoryController::class, 'show'])->name('categories.show');

// TAGS ROUTES
Route::resource('tags', TagController::class)->only(['show']);

/* Public Profile */
Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');

/* Edit Profile */
// Route::middleware('auth')->group(function () {
    Route::get('/profile/edit',[ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update',[ProfileController::class, 'update'])->name('profile.update');

    /* Logout */
    Route::post('/logout', [LoginController::class, 'logout'])
        ->middleware('auth')
        ->name('logout');
// });


/* Guest Only - AUTH ROUTES */
Route::middleware('guest')->group(function () {
    // Login
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    // Register
    Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

// DASHBOARD ROUTES
Route::prefix('dashboard')
    ->name('dash.')
    ->group(function () {
    
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    // Trash Posts
    Route::get('/posts-trash', [DashboardPostController::class, 'trash'])->name('posts.trash');

    // USERS
    Route::resource('users', UserController::class);

    // Route::controller(UserController::class)->group(function(){
    //     Route::get('/users', 'index')->name('userlist');
    //     Route::get('/users/create', 'create')->name('user.create');
    //     Route::post('/users/store', 'store')->name('user.store');
    //     Route::get('/user/edit/{id}', 'edit')->name('user.edit');
    //     Route::get('/user/{id}', 'show')->name('user.show');
    //     Route::post('/user/{id}', 'update')->name('user.update');
    //     Route::get('/user/delete/{id}', 'destroy')->name('user.delete');
    // });

    // CATEGORIES
    // Route::resource('categories', DashboardCategoryController::class);

    // TAGS
    Route::resource('tags' , DashboardTagController::class)->except(['show']);
    
    // COMMENTS
    // Route::get('/comments', [DashboardCommentController::class, 'index'])->name('comments.index');
});

