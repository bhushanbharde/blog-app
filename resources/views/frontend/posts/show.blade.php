{{-- Purpose - Single blog details page. --}}

@extends('layouts.frontend')

@section('frontend-content')
    <div class="pt-10">
        <h1 class="text-4xl font-bold mb-4">{{ $post->title }}</h1>
        <div class="flex items-center">
            <img src="{{ $post->avatar }}" alt="">
            <span>{{ $post->name }}</span>
            <a href="" class="px-4 py-2 border border-gray-700">Follow</a>
            <span>5 min read</span>
            <span>{{ $post->created_at }}</span>
        </div>

        <div class="flex justify-between">
            <div class="flex text-gray-400 text-sm gap-6">
                <div>
                    <a href=""><i class="fa-solid fa-hands-clapping"></i> 23</a>
                </div>
                <div>
                    <a href=""><i class="fa-regular fa-comment"></i> 34</a>
                </div>
                <div>
                    <a href=""><i class="fa-solid fa-retweet"></i> 12</a>
                </div>
            </div>

            <div class="flex text-gray-400 text-sm gap-6">
                <div>
                    <a href=""><i class="fa-solid fa-hands-clapping"></i> 23</a>
                </div>
                <div>
                    <a href=""><i class="fa-regular fa-comment"></i> 34</a>
                </div>
                <div>
                    <a href=""><i class="fa-solid fa-retweet"></i> 12</a>
                </div>
            </div>
        </div>

        <div>
            <img src="{{ $post->cover_image }}" alt="">
        </div>

        <div>
            <p>{{ $post->content }}</p>
        </div>

    </div>
@endsection
