@extends('layouts.app')

@section('content')

<div class="flex min-h-screen">

    {{-- Sidebar --}}
    <aside class="w-64 bg-gray-900 text-white p-6 hidden md:block">

        <h2 class="text-2xl font-bold mb-8">
            Dashboard
        </h2>

        <nav class="space-y-3">

            <a href="/dashboard"
               class="block px-4 py-2 rounded-lg hover:bg-gray-800">
                Home
            </a>

            <a href="/dashboard/posts"
               class="block px-4 py-2 rounded-lg hover:bg-gray-800">
                Posts
            </a>

            <a href="/dashboard/categories"
               class="block px-4 py-2 rounded-lg hover:bg-gray-800">
                Categories
            </a>

            <a href="/dashboard/users"
               class="block px-4 py-2 rounded-lg hover:bg-gray-800">
                Users
            </a>

            <a href="/dashboard/comments"
               class="block px-4 py-2 rounded-lg hover:bg-gray-800">
                Comments
            </a>

        </nav>

    </aside>

    {{-- Main Content --}}
    <div class="flex-1">

        {{-- Topbar --}}
        <header class="bg-white shadow-sm px-6 py-4 flex items-center justify-between">

            <h1 class="text-2xl font-semibold">
                {{ $pageTitle ?? 'Dashboard' }}
            </h1>

            <div class="flex items-center gap-4">

                <span class="text-sm text-gray-600">
                    {{ auth()->user()->name }}
                </span>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf

                    <button
                        class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg">
                        Logout
                    </button>
                </form>

            </div>

        </header>

        {{-- Page Content --}}
        <div class="p-6">
            @yield('dashboard-content')
        </div>

    </div>

</div>

@endsection