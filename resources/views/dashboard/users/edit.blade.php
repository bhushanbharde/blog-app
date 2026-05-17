{{-- Purpose

Update user role/profile. --}}

@extends('layouts.dashboard')

@section('dashboard-content')
    <div class="px-64">
        <h1 class="text-4xl font-bold mb-6">
            Edit User
        </h1>
    
        <div>
            <form action="{{ route('dash.users.update', $user->id) }}" method="POST" class="text-sm">
                @csrf
                @method('PUT')
                <div class="mt-8">
                    <label>User Name</label>
                    <x-forms.input type="text" value="{{ $user->name }}" name="name" placeholder="Enter Name" />
                </div>
                @error('name')
                    <p class="mt-2 text-red-400">{{ $message }}</p>
                @enderror
    
                <div class="mt-8">
                    <label>Email Address</label>
                    <x-forms.input type="text" value="{{ $user->email }}" name="email" placeholder="Enter Email" />
                </div>
                @error('email')
                    <p class="mt-2 text-red-400">{{ $message }}</p>
                @enderror
    
                <div class="mt-8">
                    <label>Avatar</label>
                    <x-forms.input type="text" value="{{ $user->avatar }}" name="avatar" placeholder="Enter Avatar" />
                </div>
                @error('avatar')
                    <p class="mt-2 text-red-400">{{ $message }}</p>
                @enderror
                
                <div class="mt-8">
                    <label>Bio</label>
                    <x-forms.textarea name="bio" rows="3" value="{{ $user->bio }}" placeholder="Enter Avatar Url" />
                </div>
                @error('bio')
                    <p class="mt-2 text-red-400">{{ $message }}</p>
                @enderror

                <button class="px-4 py-2 bg-blue-600 rounded-sm mt-8 w-full hover:cursor-pointer">Save</button>
            </form>
        </div>
    </div>
@endsection
