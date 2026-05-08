{{-- Purpose - Single blog details page. --}}

@extends('layouts.frontend')

@section('frontend-content')

<h1>{{ $post->title }}</h1>

<p>{{ $post->content }}</p>

@endsection