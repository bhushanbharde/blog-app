@extends('layouts.dashboard')

@section('dashboard-content')
    <div class="flex justify-between items-start">
        <h1 class="text-4xl font-bold">Edit Tag</h1>
        <a href="{{ route('dash.tags.index') }}" class="">
            <x-forms.button name="Back" type="info" />
        </a>
    </div>

    <div class="mt-10">
        <form action="{{ route('dash.tags.update', $tag->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label>Tag Name</label>
            <x-forms.input placeholder="Enter tag name" value="{{ $tag->name }}" name="tag_name" />

            @error('tag_name')
                <p class="mt-2 text-red-600">{{ $message }}</p>
            @enderror

            <div class="mt-8">
                <x-forms.button name="Save" type="primary" />
            </div>
        </form>
    </div>
@endsection
