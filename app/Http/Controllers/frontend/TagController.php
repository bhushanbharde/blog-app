<?php

namespace App\Http\Controllers\frontend;

use App\Models\Tag;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::withCount(['posts'])->get();
        return response()->json(['tags' => $tags]);
    }

    
    public function show(Tag $tag)
    {
        dd($tag);
        $posts = Tag::with(['posts'])
                    ->where('shortname', $tag->shortname)
                    ->get();

        $tags = Tag::withCount(['posts'])->get();

        return response()->json(['tags' => $tags, 'posts' => $posts]);
    }

    public function getTagBySlug($slug) {
        $tag = Tag::with(['posts.user'])->where('shortname', $slug)->get();
        return $tag;
    }
}
