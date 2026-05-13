<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();

        // User::create([
        //     'name'  => 'Bhushan',
        //     'email' => 'bhush.coc@gmail.com',
        //     'password' => Hash::make('bhush123'),
        //     'bio'   =>  'my bio']
        // );
    }
}
