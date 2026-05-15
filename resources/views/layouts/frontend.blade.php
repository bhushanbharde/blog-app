@extends('layouts.app')

@section('content')

<div class="mx-auto py-16 px-10">

    <div class="flex">

        <div class="w-9/12 pr-10">
            @yield('frontend-content')
        </div>
        @include('components.sidebar')

    </div>

</div>

@endsection