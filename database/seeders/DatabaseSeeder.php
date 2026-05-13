<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Comment;
use Database\Seeders\TagSeeder;
use Illuminate\Database\Seeder;
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
        $this->call([
            UserSeeder::class,
            PostSeeder::class,
            CategorySeeder::class,
            TagSeeder::class
        ]);

        Comment::factory(100)->create();
        Role::factory(3)->create();
    }
}
