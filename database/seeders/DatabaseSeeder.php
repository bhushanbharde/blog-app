<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Like;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use Database\Seeders\TagSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\LikeSeeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CategorySeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {        
        // $this->call([
        //     UserSeeder::class,
        //     PostSeeder::class,
        //     CategorySeeder::class,
        //     TagSeeder::class,
        //     LikeSeeder::class,
        //     CommentSeeder::class,
        // ]);

        $users = User::factory(200)->create();
        $categories = Category::factory(5)->create();
        $tags = Tag::factory(20)->create();
        
        $posts = Post::factory(100)
            ->recycle($users)
            ->create();

        $comments = Comment::factory(400)
            ->recycle($users)
            ->recycle($posts)
            ->create();

        Like::factory(200)
            ->recycle($users)
            ->recycle($posts)
            ->create();

        Role::factory(3)->create();
    }
}
