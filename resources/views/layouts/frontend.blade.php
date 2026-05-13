@extends('layouts.app')

@section('content')

<div class="container mx-auto py-10">

    <div class="grid gap-6">

        <div class="col-span-3">
            @yield('frontend-content')
        </div>

        @include('components.sidebar')

    </div>

</div>

@endsection