<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::withCount('posts')->latest()->get();
        return $tags;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = 'Tag created successfully!';
        $request->validate([
            'tag_name' => ['required', 'min:2']
        ]);

        try {
            $res = Tag::create([
                'name' => $request->tag_name,
                'shortname' => Str::slug($request->tag_name),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        } catch (Exception $e) {
            $message = $e;
        }

        return response()->json(['status' => true, 'message' => $message]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        return $tag;
        $posts = $tag->posts()
                 ->latest()
                 ->paginate(10);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        $tag = Tag::find($tag->id);
        return view('dashboard.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        $message = 'Tag updated successfully!';
        $request->validate([
            'tag_name' => ['required', 'min:2']
        ]);

        try {
            $tag->update([
                'name' => $request->tag_name,
                'shortname' => Str::slug($request->tag_name),
                'updated_at' => now(),
            ]);
        } catch (Exception $e) {
            $message = $e;
        }

        return response()->json(['status' => true, 'message' => $message]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        // dd($tag);
        Tag::where('id', $tag->id)->delete();
        return redirect()->route('dash.tags.index')->with('status', 'Tag deleted successfully!');
    }
}
