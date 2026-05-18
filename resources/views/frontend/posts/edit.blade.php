@extends('layouts.frontend')

@section('frontend-content')
    <div class="px-44">
        <div class="flex justify-between items-center">
            <h1 class="text-4xl font-semibold ">Edit Post</h1>
            <a href="{{ route('posts.show', $post->id) }}" class="">
                <x-forms.button name="Back" type="info" />
            </a>
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
                    <x-forms.input type="text" value="{{ $post->cover_image }}" name="cover_image"
                        placeholder="Enter Image Url" />
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

                <div class="mt-8">
                    <x-forms.button name="Save" type="primary" />
                </div>
            </form>

        </div>
    </div>
@endsection
