{{-- Purpose - Single blog details page. --}}

@extends('layouts.frontend')

@section('frontend-content')
    <div class="pt-20 px-28">
        <h1 class="text-4xl font-bold mb-4">{{ $post->title }}</h1>
        <div class="flex items-center gap-4 text-sm my-8">
            <img class="rounded-full w-8 " src="{{ $post->avatar }}" alt="">
            <span>{{ $post->name }}</span>
            <a href="" class="px-4 py-2 border border-gray-700 rounded-xl hover:bg-gray-700">Follow</a>
            <span>{{ max(1, ceil(str_word_count(strip_tags($post->content)) / 200)) }} min read</span>
            <i class="fa-solid fa-circle text-[3px]"></i>
            <span>{{  \Carbon\Carbon::parse($post->created_at)->format('M d, Y') }}</span>
        </div>

        <hr class="text-gray-700" />
        <div class="flex justify-between py-4">
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
        <hr class="text-gray-700" />

        <div class="mt-12">
            <img src="{{ $post->cover_image }}" alt="">
        </div>

        <div class="mt-12 text-lg leading-8">
            <p>{!! $post->content !!}</p>
        </div>

    </div>
@endsection
