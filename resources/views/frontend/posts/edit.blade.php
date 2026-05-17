@extends('layouts.frontend')

@section('frontend-content')
    <div class="flex justify-between items-center pt-16">
        <h1 class="text-4xl font-semibold ">Edit Post</h1>
        <a href="{{ route('posts.show', $post->id) }}" class="whitespace-nowrap text-sm px-4 py-2 bg-indigo-600 rounded-lg">Back</a>
    </div>

    <div class="mt-10">
        <form action="{{ route('posts.update', $post->id) }}" method="POST" class="text-sm">
            @csrf
            @method('PUT')
            <div class="mt-8">
                <label>Title</label>
                <x-forms.input type="text" value="{{ $post->title }}" name="title" placeholder="Enter Title" />
            </div>
            @error('title')
                <p class="mt-2 text-red-400">{{ $message }}</p>
            @enderror

            <div class="mt-8">
                <label>Post Image</label>
                <x-forms.input type="text" value="{{ $post->cover_image }}" name="cover_image" placeholder="Enter Image Url" />
            </div>
            @error('cover_image')
                <p class="mt-2 text-red-400">{{ $message }}</p>
            @enderror

            <div class="mt-8">
                <label>Content</label>
                <x-forms.textarea value="{{ $post->content }}" name="content" rows="3"
                    placeholder="Enter content" />
            </div>
            @error('content')
                <p class="mt-2 text-red-400">{{ $message }}</p>
            @enderror

            <button class="px-4 py-2 bg-blue-600 rounded-sm mt-8 w-full hover:cursor-pointer">Save</button>
        </form>

    </div>
@endsection
