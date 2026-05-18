@extends('layouts.dashboard')

@section('dashboard-content')
    <div class="">
        <div class="flex justify-between items-start">
            <h1 class="text-4xl font-bold">Dashboard Home</h1>
            <a href="{{ route('dash.tags.create') }}"
                class="ml-10 whitespace-nowrap text-sm px-4 py-2 bg-indigo-600 rounded-lg">Button</a>
        </div>
    </div>
@endsection