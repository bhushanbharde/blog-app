{{-- Purpose - All blog posts listing. --}}

@extends('layouts.frontend')

@section('frontend-content')

@foreach($posts as $post)

    @include('components.post-card')
    <hr class="text-gray-700" />

@endforeach


@endsection