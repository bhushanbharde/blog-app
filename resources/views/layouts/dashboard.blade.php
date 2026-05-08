@extends('layouts.app')

@section('content')

<div class="flex">

    @include('components.sidebar')

    <div class="flex-1 p-6">
        @yield('dashboard-content')
    </div>

</div>

@endsection