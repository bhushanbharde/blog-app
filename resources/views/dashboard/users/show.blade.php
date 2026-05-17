@extends('layouts.dashboard')

@section('dashboard-content')
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-xl font-semibold ">
            Users Info
        </h1>
        <a href="{{ route('dash.users.index') }}" class="px-4 py-2 bg-indigo-600 rounded-sm">Back</a>
    </div>

    <hr class="text-gray-700" />

    <div class="">
        <div class="flex py-6">
            <div class="w-1/3">Profile Photo</div>
            <div class="w-2/3 text-gray-400">
                <img class="w-44 rounded-lg" src="{{ $user->avatar }}" alt="">
            </div>
        </div>
        <hr class="text-gray-700" />

        <div class="flex py-6">
            <div class="w-1/3">Full Name</div>
            <div class="w-2/3 text-gray-400">{{ $user->name }}</div>
        </div>
        <hr class="text-gray-700" />

        <div class="flex py-6">
            <div class="w-1/3">Email</div>
            <div class="w-2/3 text-gray-400">{{ $user->email }}</div>
        </div>
        <hr class="text-gray-700" />

        <div class="flex py-6">
            <div class="w-1/3">Bio</div>
            <div class="w-2/3 text-gray-400">{{ $user->bio }}</div>
        </div>
    </div>



    {{-- <table class="border-collapse border border-gray-600 p-2">
        <thead>
            <tr>
                <th class="border border-gray-600 px-3 py-2">Name</th>
                <th class="border border-gray-600 px-3 py-2">Email</th>
                <th class="border border-gray-600 px-3 py-2">Bio</th>
                <th class="border border-gray-600 px-3 py-2">Avatar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-600 px-3 py-2">{{ $user->name }}</td>
                <td class="border border-gray-600 px-3 py-2">{{ $user->email }}</td>
                <td class="border border-gray-600 px-3 py-2">{{ $user->bio }}</td>
                <td class="border border-gray-600 px-3 py-2">{{ $user->avatar }}</td>
            </tr>
        </tbody>
    </table> --}}
@endsection
