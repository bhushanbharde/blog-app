<?php

namespace App\Providers;

use App\Models\Post;
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
        //Load sidebar
        // $topPosts = DB::table('posts')
        //             ->join('users', 'posts.user_id', '=', 'users.id')
        //             ->select(['posts.*', 'users.name', 'users.avatar'])
        //             ->take(3)
        //             ->get();

        view()->composer('components.sidebar', function ($view) {
            $view->with([
                'posts' => DB::table('posts')
                    ->join('users', 'posts.user_id', '=', 'users.id')
                    ->select(['posts.*', 'users.name', 'users.avatar'])
                    ->take(3)
                    ->get()
            ]);
        });
    }
}
