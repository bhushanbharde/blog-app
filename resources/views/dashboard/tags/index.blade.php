@extends('layouts.dashboard')
@php
    // dd($tags);
@endphp
@section('dashboard-content')
    <div class="">
        <div class="flex justify-between items-start">
            <h1 class="text-4xl font-bold">Manage Tags</h1>
            <a href="{{ route('dash.tags.create') }}"
                class="ml-10 whitespace-nowrap text-sm px-4 py-2 bg-indigo-600 rounded-lg">Add New Tag</a>
        </div>

        <div>
            @if (session('status'))
                <p class="px-4 py-3 bg-green-600 rounded-lg mt-8">{{ session('status') }}</p>
            @endif
        </div>

        <div class="mt-10 flex flex-wrap gap-2">
            <table class="table-auto w-full">
                <thead class="border border-gray-700 text-left">
                    <th class="p-3 bg-gray-800">Name</th>
                    <th class="p-3 bg-gray-800">Actions</th>
                    {{-- <th class="p-3 bg-gray-800">Delete</th> --}}
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr class="bg-gray border border-gray-700">
                            <td class="p-3">{{ $tag->name }}</td>
                            <td class="text-sm p-3 px-4 py-2 bg-blue-600 inline-block rounded-lg my-2 mx-2"><a href="{{ route('dash.tags.edit', $tag->id) }}">Edit</a>
                            </td>
                            <td class="text-sm p-3 px-4 py-2 bg-red-700 inline-block rounded-lg my-2 mx-2">
                                <form action="{{ route('dash.tags.destroy', $tag->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="cursor-pointer">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
@endsection
