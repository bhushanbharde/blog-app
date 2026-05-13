{{-- Purpose

Manage users.

Shows
Roles
Status
Actions
 --}}

@extends('layouts.dashboard')

@section('dashboard-content')
    <h1 class="text-4xl font-bold mb-6">
        Users List
    </h1>

    <table class="border-collapse border border-gray-600 p-2">
        <thead>
            <tr>
                <th class="border border-gray-600 px-3 py-2">No</th>
                <th class="border border-gray-600 px-3 py-2">Name</th>
                <th class="border border-gray-600 px-3 py-2">Email</th>
                <th class="border border-gray-600 px-3 py-2">Bio</th>
                <th class="border border-gray-600 px-3 py-2">View</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="border border-gray-600 px-3 py-2">{{ $user->id }}</td>
                    <td class="border border-gray-600 px-3 py-2">{{ $user->name }}</td>
                    <td class="border border-gray-600 px-3 py-2">{{ $user->email }}</td>
                    <td class="border border-gray-600 px-3 py-2">{{ $user->bio }}</td>
                    <td class="border border-gray-600 px-3 py-2"><a href={{ route('user.show', $user->id) }} class="px-4 py-2 rounded-sm bg-blue-600">View</a></td>
                    <td class="border border-gray-600 px-3 py-2"><a href={{ route('user.show', $user->id) }} class="px-4 py-2 rounded-sm bg-gray-600">Edit</a></td>
                    <td class="border border-gray-600 px-3 py-2"><a href={{ route('user.show', $user->id) }} class="px-4 py-2 rounded-sm bg-red-700">Delete</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
