{{-- Purpose - All blog posts listing. --}}

@extends('layouts.frontend')

@section('frontend-content')
    <h1 class="text-4xl font-semibold pt-16">All Posts</h1>

    @foreach ($posts as $post)
        @include('components.post-card')
    @endforeach
    <div class="my-8"></div>
    {{ $posts->links() }}
@endsection
