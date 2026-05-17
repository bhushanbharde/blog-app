{{-- Purpose - All blog posts listing. --}}

@extends('layouts.frontend')

@section('frontend-content')
    <div class="flex justify-between items-center">
        <h1 class="text-4xl font-semibold pt-16">All Posts</h1>
        <a href="{{ route('posts.create') }}" class="mt-16 text-sm px-4 py-2 bg-indigo-600 rounded-lg">Add New Post</a>
    </div>

    @if (session('status'))
    <p class="px-4 py-3 rounded-lg bg-green-700 mt-6">{{ session('status') }}</p>        
    @endif

    @foreach ($posts as $post)
        @include('components.post-card')
    @endforeach
    <div class="my-8"></div>
    {{ $posts->links() }}
@endsection
