@extends('layouts.dashboard')

@section('dashboard-content')
    <div class="flex justify-between items-start">
        <h1 class="text-4xl font-bold">Edit Tag</h1>
        <a href="{{ route('dash.tags.index') }}" class="ml-10 whitespace-nowrap text-sm px-4 py-2 bg-indigo-600 rounded-lg">Back</a>
    </div>

    <div class="mt-10">
        <form action="{{ route('dash.tags.update', $tag->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label>Tag Name</label>
            <x-forms.input placeholder="Enter tag name" value="{{ $tag->name }}" name="tag_name"/>
            
            @error('tag_name')
                <p class="mt-2 text-red-600">{{ $message }}</p>
            @enderror
            <button class="px-4 py-2 bg-indigo-600 rounded-lg mt-4 hover:cursor-pointer" type="submit1">Save</button>
        </form>
    </div>
@endsection
