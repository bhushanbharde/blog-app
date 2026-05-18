{{-- Purpose - All blog posts listing. --}}

@extends('layouts.frontend')

@section('frontend-content')
    <div class="flex justify-between items-center">
        <h1 class="text-4xl font-semibold">All Posts</h1>
        <a href="{{ route('posts.create') }}" class="">
            <x-forms.button name="New Post" type="info" />
        </a>
    </div>

    <div>
        <x-alert for="status" />
    </div>

    @foreach ($posts as $post)
        @include('components.post-card')
    @endforeach
    <div class="my-8"></div>
    {{ $posts->links() }}
@endsection

@section('sidebar')
    @include('components.sidebar')
@endsection
