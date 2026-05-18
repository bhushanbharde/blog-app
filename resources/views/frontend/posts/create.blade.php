@extends('layouts.frontend')

@section('frontend-content')
    <div class="flex justify-between items-center">
        <h1 class="text-4xl font-semibold">Create New Post</h1>
    </div>

    <div class="mt-10">
        <form action="{{ route('posts.store') }}" method="POST" class="text-sm">
            @csrf
            <div class="mt-8">
                <label>Title</label>
                <x-forms.input type="text" name="title" value="{{ old('title') }}" placeholder="Enter Name" />
            </div>
            @error('title')
                <p class="mt-2 text-red-400">{{ $message }}</p>
            @enderror

            <div class="mt-8">
                <label>Post Image</label>
                <x-forms.input type="text" name="cover_image" value="{{ old('cover_image') }}" placeholder="Enter Avatar" />
            </div>
            @error('cover_image')
                <p class="mt-2 text-red-400">{{ $message }}</p>
            @enderror

            <div class="mt-8">
                <label>Content</label>
                <x-forms.textarea name="content" value="{{ old('content') }}" rows="3"
                    placeholder="Enter content" />
            </div>
            @error('content')
                <p class="mt-2 text-red-400">{{ $message }}</p>
            @enderror

            <div class="mt-8">
                <x-forms.button name="Create" type="primary" />
            </div>
        </form>

    </div>
@endsection
