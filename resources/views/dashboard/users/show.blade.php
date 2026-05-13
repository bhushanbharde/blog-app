@extends('layouts.dashboard')

@section('dashboard-content')
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-4xl font-bold ">
            Users Info
        </h1>
        <a href="/users" class="px-4 py-2 bg-green-600 rounded-sm">Back</a>
    </div>

    <table class="border-collapse border border-gray-600 p-2">
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
    </table>
@endsection
