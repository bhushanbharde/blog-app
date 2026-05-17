@php
    // dd($posts);
@endphp

@extends('layouts.dashboard')

@section('content')
    <div class="px-44 pt-28">
        <div class="flex items-center whitespace-nowrap gap-3 overflow-x-scroll text-sm">
            @foreach ($tags as $tag1)
                <a href="{{ route('tags.show', $tag1->id) }}" class="inline-block px-4 py-2 bg-gray-800 rounded-lg hover:bg-gray-700 transition duration-300">{{ $tag1->name }}
                </a>
            @endforeach
        </div>
        <div class="pt-10 text-center">
            <h1 class="text-4xl font-bold">
                {{ $tag->name }}
            </h1>
            <div class="w-fit mx-auto mt-4 text-sm flex items-center">
                <span>Topic</span>
                <i class="fa-solid fa-circle text-[4px] mx-2 text-gray-400"></i>
                <span>45k followers</span>
                <i class="fa-solid fa-circle text-[4px] mx-2 text-gray-400"></i>
                <span>{{ $posts->count() }} stories</span>
            </div>
        </div>

        <div class="pt-10">
            @foreach ($posts as $post)
                @include('components.post-card')
            @endforeach
        </div>
    </div>
@endsection
