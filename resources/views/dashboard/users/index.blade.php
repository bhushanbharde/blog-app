{{-- Purpose

Manage users.

Shows
Roles
Status
Actions
 --}}

@extends('layouts.dashboard')

@section('dashboard-content')
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-4xl font-bold ">
            Users List
        </h1>
        <a href="{{ route('user.create') }}" class="px-4 py-2 bg-indigo-600 rounded-sm">New User</a>
    </div>

    @if (session('status'))
    <p class="px-4 py-4 my-6 bg-green-600 rounded-lg border border-green-900">{{ session('status') }}</p>
    @endif

    <table class="border-collapse border border-gray-600 w-full">
        <thead>
            <tr>
                <th class="border border-gray-600 px-3 py-2">No</th>
                <th class="border border-gray-600 px-3 py-2">Avatar</th>
                <th class="border border-gray-600 px-3 py-2">Name</th>
                <th class="border border-gray-600 px-3 py-2">Email</th>
                <th class="border border-gray-600 px-3 py-2">View</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $key => $user)
                <tr>
                    <td class="border border-gray-600 px-3 py-2">{{ $key + 1 }}</td>
                    <td class="border border-gray-600 px-3 py-2">
                        <img src="{{ $user->avatar }}" alt="" class="w-12 rounded-full">
                    </td>
                    <td class="border border-gray-600 px-3 py-2">{{ $user->name }}</td>
                    <td class="border border-gray-600 px-3 py-2">{{ $user->email }}</td>
                    <td class="border border-gray-600 px-3 py-2"><a href={{ route('user.show', $user->id) }} class="px-4 py-2 rounded-sm bg-blue-600">View</a></td>
                    <td class="border border-gray-600 px-3 py-2"><a href={{ route('user.edit', $user->id) }} class="px-4 py-2 rounded-sm bg-gray-600">Edit</a></td>
                    <td class="border border-gray-600 px-3 py-2"><a href={{ route('user.delete', $user->id) }} class="px-4 py-2 rounded-sm bg-red-700">Delete</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
