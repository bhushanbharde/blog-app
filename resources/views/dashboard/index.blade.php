@extends('layouts.dashboard')

@section('dashboard-content')
    <div class="">
        <div class="flex justify-between items-start">
            <h1 class="text-4xl font-bold">Dashboard Home</h1>
            <a href="{{ route('dash.tags.create') }}" class=""><x-forms.button name="Button" type="info" /></a>
        </div>
    </div>
@endsection
