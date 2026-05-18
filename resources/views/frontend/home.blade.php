{{-- 
Purpose - Homepage.
Shows:
    Featured posts
    Latest blogs 
--}}

@extends('layouts.frontend')

@section('frontend-content')
    <h1 class="text-4xl font-semibold">Top Articles</h1>
    @foreach ($posts as $post)
        @include('components.post-card')
    @endforeach
@endsection

@section('sidebar')
    @include('components.sidebar')
@endsection
