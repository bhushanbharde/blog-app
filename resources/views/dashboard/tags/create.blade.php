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

            <div class="mt-8">
                <x-forms.button name="Create" type="primary" /></a>
            </div>
        </form>
    </div>
@endsection
