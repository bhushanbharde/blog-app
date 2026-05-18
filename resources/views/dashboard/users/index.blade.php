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
            Manage Users
        </h1>
        <a href="{{ route('dash.users.create') }}" class="">
            <x-forms.button name="New User" type="info" />
        </a>
    </div>

    <div>
        <x-alert for="status" />
    </div>

    <table class="border-collapse border border-gray-600 w-full">
        <thead>
            <tr>
                <th class="border border-gray-600 px-3 py-2">No</th>
                <th class="border border-gray-600 px-3 py-2">Avatar</th>
                <th class="border border-gray-600 px-3 py-2">Name</th>
                <th class="border border-gray-600 px-3 py-2">Email</th>
                <th class="border border-gray-600 px-3 py-2" colspan="3">Actions</th>
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
                    <td class="border border-gray-600 px-3 py-2">
                        <a href={{ route('dash.users.show', $user->id) }} class="">
                            <x-forms.button name="View" type="primary" /></a>
                    </td>
                    <td class="border border-gray-600 px-3 py-2">
                        <a href={{ route('dash.users.edit', $user->id) }} class="">
                            <x-forms.button name="Edit" type="secondary" icon="pen" icontype="solid" /></a>
                    </td>
                    <td class="border border-gray-600 px-3 py-2">
                        <a href={{ route('dash.users.destroy', $user->id) }} class="">
                            <x-forms.button name="Delete" type="danger" icon="trash-can" icontype="solid" />
                        </a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
