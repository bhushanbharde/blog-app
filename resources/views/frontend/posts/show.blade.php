{{-- Purpose - Single blog details page. --}}
@php
    // dd($post->comments);
@endphp
@extends('layouts.frontend')

@section('frontend-content')
    <div class="pt-20 px-28">
        <div class="">
            @if (session('status'))
                <p class="px-4 py-3 rounded-lg bg-green-700 my-6">{{ session('status') }}</p>
            @endif

            <div class="flex justify-between items-start">
                <h1 class="text-4xl font-bold">{{ $post->title }}</h1>
                <a href="{{ route('posts.edit', $post->id) }}"
                    class="ml-10 whitespace-nowrap text-sm px-4 py-2 bg-indigo-600 rounded-lg">Edit Post</a>
            </div>

            <div class="flex items-center gap-4 text-sm my-8">
                <img class="rounded-full w-8 " src="{{ $post->user->avatar }}" alt="">
                <span>{{ $post->user->name }}</span>
                <a href="" class="px-4 py-2 border border-gray-700 rounded-xl hover:bg-gray-700">Follow</a>
                <span>{{ max(1, ceil(str_word_count(strip_tags($post->content)) / 200)) }} min read</span>
                <i class="fa-solid fa-circle text-[3px]"></i>
                <span>{{ \Carbon\Carbon::parse($post->created_at)->format('M d, Y') }}</span>
            </div>

            <hr class="text-gray-700" />
            <div class="flex justify-between py-4">
                <div class="flex text-gray-400 text-sm gap-6">
                    <div>
                        <a href="" class="flex items-center gap-1"><i
                                class="text-xl fa-solid fa-hands-clapping"></i>{{ $post->like }}</a>
                    </div>
                    <div>
                        <a href="#comment_block" class="flex items-center gap-1"><i
                                class="text-xl fa-regular fa-comment"></i>{{ $post->comments->count() }}</a>
                    </div>
                    <div>
                        <a href="" class="flex items-center gap-1"><i class="text-xl fa-solid fa-retweet"></i> 12</a>
                    </div>
                </div>

                <div class="flex text-gray-400 text-xl gap-6">
                    <div>
                        <a href=""><i class="fa-regular fa-bookmark"></i></a>
                    </div>
                    <div>
                        <a href=""><i class="fa-regular fa-circle-play"></i></a>
                    </div>
                    <div>
                        <a href=""><i class="fa-solid fa-share-nodes"></i></a>
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

        <div class="mt-10 flex flex-wrap gap-3">
            @foreach ($post->tags as $tag)
                <a href="{{ route('tags.show', $tag->id) }}"
                    class="inline-block px-4 py-2 bg-gray-800 rounded-lg hover:bg-gray-700 transition duration-300">
                    {{ $tag->name }}
                </a>
            @endforeach
        </div>

        <hr class="text-gray-700 mt-10" />
        <div class="flex justify-between py-4 ">
            <div class="flex text-gray-400 text-sm gap-6">
                <div>
                    <a href="" class="flex items-center gap-1"><i
                            class="fa-solid fa-hands-clapping"></i>{{ $post->like }}</a>
                </div>
                <div>
                    <a href="" class="flex items-center gap-1"><i
                            class="fa-regular fa-comment"></i>{{ $post->comments->count() }}</a>
                </div>
                <div>
                    <a href="" class="flex items-center gap-1"><i class="fa-solid fa-retweet"></i> 12</a>
                </div>
            </div>

            <div class="flex text-gray-400 gap-6">
                <div>
                    <a href=""><i class="fa-regular fa-bookmark"></i></a>
                </div>
                <div>
                    <a href=""><i class="fa-regular fa-circle-play"></i></a>
                </div>
                <div>
                    <a href=""><i class="fa-solid fa-share-nodes"></i></a>
                </div>
            </div>
        </div>
        <hr class="text-gray-700" />

        {{-- comments --}}
        <div class="mt-10 border-b border-b-gray-700 pb-10">
            <div class="flex items-center gap-3 mb-2">
                <img src="https://mockmind-api.uifaces.co/content/human/111.jpg" class="w-10 rounded-full" alt="">
                <div class="">
                    <p class="text-sm">Jon Doe</p>
                </div>
            </div>
            <x-forms.input class="" placeholder="What are your thoughts?" />
        </div>
        <div class="" id="comment_block">
            @foreach ($post->comments as $comment)
                @include('components.comment')
            @endforeach
        </div>
    </div>
@endsection
