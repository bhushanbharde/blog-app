<?php

namespace App\Providers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Services\UnsplashService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('components.sidebar', function ($view) {
            $view->with([
                'posts' => DB::table('posts')
                    ->join('users', 'posts.user_id', '=', 'users.id')
                    ->select(['posts.*', 'users.name', 'users.avatar'])
                    ->orderBy('id', 'desc')
                    ->take(3)
                    ->get(),

                'users' => User::take(3)->get(),
                'tags' => Tag::take(6)->orderBy('id', 'desc')->get()
            ]);
        });

        view()->composer('components.navbar', function ($view) {
            $view->with([
                'user' => User::where('id', 12)->get(),
            ]);
        });
    }
}
