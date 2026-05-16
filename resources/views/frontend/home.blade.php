{{-- 
Purpose - Homepage.
Shows:
    Featured posts
    Latest blogs 
--}}

@extends('layouts.frontend')

@section('frontend-content')
    <h1 class="text-4xl font-semibold pt-16">Recent Articles</h1>
    @foreach ($posts as $post)
        @include('components.post-card')
    @endforeach
@endsection
