@extends('layouts.app')

@section('content')
    <div class="mx-auto px-10 pb-20">
        <div class="flex">
            <div class="{{ View::hasSection('sidebar') ? 'w-9/12 pr-10' : 'w-full' }}" >
                @yield('frontend-content')
            </div>
            
            @yield('sidebar')
        </div>
    </div>
@endsection
