{{-- Purpose

Create admin/author user --}}

@extends('layouts.dashboard')

@section('dashboard-content')
    <div class="mx-auto px-64">
        <h1 class="text-4xl font-bold mb-6">
            Create User
        </h1>

        <div>
            <form action="{{ route('dash.users.store') }}" method="POST" class="text-sm">
                @csrf
                <div class="mt-8">
                    <label>User Name</label>
                    <x-forms.input type="text" value="{{ old('name') }}" name="name" placeholder="Enter Name" />
                </div>
                {{-- @error('name')
                    <p class="mt-2 text-red-400">{{ $message }}</p>
                @enderror --}}

                <div class="mt-8">
                    <label>Email Address</label>
                    <x-forms.input type="text" value="{{ old('email') }}" name="email" placeholder="Enter Email" />
                </div>
                {{-- @error('email')
                    <p class="mt-2 text-red-400">{{ $message }}</p>
                @enderror --}}

                <div class="mt-8">
                    <label>Avatar</label>
                    <x-forms.input type="text" value="{{ old('avatar') }}" name="bio" placeholder="Enter Avatar" />
                </div>
                {{-- @error('bio')
                    <p class="mt-2 text-red-400">{{ $message }}</p>
                @enderror --}}

                <div class="mt-8">
                    <label>Bio</label>
                    <x-forms.textarea value="{{ old('bio') }}" name="avatar" rows="3"
                        placeholder="Enter about yourself" />
                </div>
                {{-- @error('avatar')
                    <p class="mt-2 text-red-400">{{ $message }}</p>
                @enderror --}}

                <div class="mt-8">
                    <x-forms.button name="Create" type="primary" />
                </div>
            </form>
        </div>
    </div>
@endsection
