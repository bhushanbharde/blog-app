@extends('layouts.app')

@section('content')

<div class="flex justify w-full">

    @include('components.sidemenu')

    <div class="w-10/12 py-28 px-12 ml-[20%]">
        @yield('dashboard-content')
    </div>

</div>

@endsection