<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::with('user')->latest()->take(20)->get();
        return view('frontend.home', ['posts' => $posts]);
    }
}
