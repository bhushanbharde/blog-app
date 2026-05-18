@extends('layouts.dashboard')

@section('dashboard-content')
    <div class="flex justify-between items-start">
        <h1 class="text-4xl font-bold">Create New Tag</h1>
    </div>

    <div class="mt-10">
        <form action="{{ route('dash.tags.store') }}" method="POST">
            <label>Tag Name</label>
            <x-forms.input placeholder="Enter tag name" name="tag_name"/>
            
            @error('tag_name')
                <p class="mt-2 text-red-600">{{ $message }}</p>
            @enderror
            <button class="px-4 py-2 bg-indigo-600 rounded-lg mt-4 hover:cursor-pointer" type="submit">Create</button>
        </form>
    </div>
@endsection
