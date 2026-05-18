<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('user')->paginate(5);
        return view('frontend.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->cover_image = $request->cover_image;
        $post->content = $request->content;
        $post->user_id = User::inRandomOrder()->first()?->id ?? User::factory();
        $post->slug = Str::slug($request->title);
        $post->status = 'draft';
        $post->published_at = now();
        $post->created_at = now();
        $post->updated_at = now();        
        
        $post->save();
        return redirect()->route('posts.index')->with('status', 'Post created successfully!');;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::with([
            'comments.user',
            'tags',
            'user',
            'likes'
        ])
        ->withCount('likes')
        ->where('id', $id)
        ->firstOrFail();

        // dd($post->comments);
                    
        return view('frontend.posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::where('id', $id)->get();
        // dd($post);
        return view('frontend.posts.edit', ['post' => $post[0]]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, $id)
    {
        $post = Post::find($id);
        // dd($post);
        $post->title = $request->title;
        $post->cover_image = $request->cover_image;
        $post->content = $request->content;
        $post->updated_at = now();
        $post->save();

        return redirect()->route('posts.show', $id)->with('status', 'Post updated successfully!');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        return redirect()->route('posts.index')->with('status', 'Post deleted successfully!');
    }
}
