{{-- 
Purpose - Public author profile.

Shows:
    Author info
    Published blogs --}}

@php
    // dd($user->posts);
@endphp

@extends('layouts.frontend')

@section('frontend-content')

<div class="flex justify-between">
    <div class="w-9/12 pr-24 pl-14">
        <h1 class="text-4xl font-semibold">{{ $user->name }}</h1>
        <hr class="text-gray-700 mt-4" />
        <div>
            @foreach ($user->posts as $post)
                @include('components.post-card')
            @endforeach
        </div>
    </div>
    @include('components.profile')
</div>
    
@endsection