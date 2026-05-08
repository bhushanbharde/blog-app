@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-4 py-8">

    {{-- Flash Message --}}
    @if(session('success'))
        <div class="border border-gray-500 text-green-600 p-4 rounded-lg mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

        {{-- Main Content --}}
        <div class="lg:col-span-3">
            @yield('frontend-content')
        </div>

        {{-- Sidebar --}}
        <aside class="border border-gray-500 p-6 rounded-2xl h-fit">
            <h2 class="text-xl font-semibold mb-4">
                Trending Topics
            </h2>

            <ul class="space-y-3 text-sm">
                <li>
                    <a href="#" class="hover:text-blue-600">
                        Laravel
                    </a>
                </li>

                <li>
                    <a href="#" class="hover:text-blue-600">
                        PHP
                    </a>
                </li>

                <li>
                    <a href="#" class="hover:text-blue-600">
                        Web Development
                    </a>
                </li>
            </ul>
        </aside>

    </div>

</div>

@endsection