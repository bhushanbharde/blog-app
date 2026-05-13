@extends('layouts.app')

@section('content')

<div class="flex">

    {{-- @include('components.sidebar') --}}

    <div class="p-20">
        @yield('dashboard-content')
    </div>

</div>

@endsection